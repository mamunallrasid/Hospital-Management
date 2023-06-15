<?php
namespace App\Http\Controllers\Backend\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Backend\AdminLoginRequest;
use App\Models\User;
use Session;
class AdminLoginController extends Controller
{
    public function index()
    {
       return view('backend.login.login');
    }
    public function loginRequest(AdminLoginRequest $rqst)
    {


        $email = $rqst->email;
        $password = encryptPassword($rqst->password);
        $count = User::where('email',$email)->count();
        if($count >0)
        {
            $sql = User::where('email',$email)->first();
            if($sql->password == $password)
            {
                if($sql->status==1)
                {
                    $token = encryptPassword(rand());
                    $update = User::where('id',$sql->id)->update(['remember_token'=>$token]);
                    if($update)
                    {

                        // $rqst->session()->put('AdminId',$sql->id);
                        Session::put('AdminId', $sql->id);
                        Session::put('AdminToken', $token);

                        // $rqst->session()->put('AdminToken',$token);
                        // getResponse(status,redirect,reload,url,message)
                        $response =  getResponse(true,true,false,route('admin.dashboard'),'Login Succesfully');
                        return $response;
                    }
                    else{

                        // getResponse(status,redirect,reload,url,message)
                        $response =  getResponse(false,false,true,null,'Technical issue, Please Try Again !');
                        return $response;
                    }


                }
                else{

                    // getResponse(status,redirect,reload,url,message)
                    $response =  getResponse(false,false,false,null,'Your Account is Deactivate !');
                    return $response;
                }
            }
            else{
                // getResponse(status,redirect,reload,url,message)
                $response =  getResponse(false,false,false,null,'Your Password is Invalid !');
                return $response;
            }

        }
        else{

            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,"Your Email is Invalid !");
            return $response;

        }


    }

  public function Change_Password(Request $rqst)
  {
    $id = session()->get('SUPER_ID');
    $sql = User::where('id',$id)->first();

    $password = $rqst->password;
    $new_password = $rqst->new_password;
    $old_password = encryptPassword($rqst->old_password);
    if($sql->PASSWORD==$old_password)
    {
        if($password != $new_password){

            echo json_encode(
                [
                    'status'=>false,
                    'redirect'=>false,
                    'reload'=>false,
                    'message'=>"Password & Comfirm Password Not Match !"
                ]
                );

        }
        else{
            $update_password = encryptPassword($new_password);
            $data = User::where('id',$id)->update(['password'=>$update_password]);
            if($data)
            {
                echo json_encode(
                    [
                        'status'=>true,
                        'redirect'=>false,
                        'reload'=>true,
                        'message'=>"Password Change Successfully"
                    ]
                    );
            }
            else{
                echo json_encode(
                    [
                        'status'=>false,
                        'redirect'=>false,
                        'reload'=>false,
                        'message'=>"Technical issue, Please try again !"
                    ]
                    );
            }

        }
    }
    else{
        echo json_encode(
            [
                'status'=>false,
                'redirect'=>false,
                'reload'=>false,
                'message'=>"Old Password Does't Match"
            ]
            );
    }




  }

  public function logoutRequest(Request $rqst)
   {

    if($rqst->session()->has('AdminId') && $rqst->session()->has('AdminToken'))
    {
        $rqst->session()->pull('AdminId',null);
        $rqst->session()->pull('AdminToken',null);
    }
    // getResponse(status,redirect,reload,url,message)
    $response =  getResponse(true,true,false,route('admin.login'),"Logout Successfully");
    return $response;

   }



}
?>
