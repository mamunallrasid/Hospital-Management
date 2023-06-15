<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\CustomerDetails;
use App\Models\CustomerBillingAddress;
use App\Http\Requests\Frontend\AuthRegisterRequest;
use App\Http\Requests\Frontend\AuthLoginRequest;
use Exception;

class AuthController extends Controller
{
    public function registerUser(AuthRegisterRequest $request)
    {
        try{
            $customer = new Customer();
            $customer->name = $request->first_name." ".$request->last_name;
            $customer->email = $request->email;
            $customer->mobile = $request->mobile;
            $customer->password = encryptPassword($request->password);
            $customer->status = '1';
            $customer->remember_token = md5(rand());
            $customer->save();
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(true,true,false,route('webpage.login'),"Registration Successfully");
        }
        catch(Exception $error){
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,true,null,$error->getMessage());
        }

        return $response;

    }

    public function loginUser(AuthLoginRequest $request)
    {
        $email = $request->email;
        $password =  encryptPassword($request->password);
        $count = Customer::where('email',$email)->count();
        if($count >0)
        {
            $sql = Customer::where('email',$email)->first();
            if($sql->password == $password)
            {
                if($sql->status=='1')
                {
                    $token = md5(rand());
                    $update = Customer::where('customer_id',$sql->customer_id)->update(['remember_token'=>$token]);
                    if($update)
                    {
                        $request->session()->put('CUSTOMER_ID',$sql->customer_id);
                        $request->session()->put('CUSTOMER_TOKEN',$token);
                        // getResponse(status,redirect,reload,url,message)
                        $response =  getResponse(true,true,false,route('webpage.cart'),"Login Successfully");
                    }
                    else{
                        // getResponse(status,redirect,reload,url,message)
                        $response =  getResponse(false,false,true,null,'Technical issue, Please Try Again !');
                    }

                }
                else{
                    // getResponse(status,redirect,reload,url,message)
                    $response =  getResponse(false,false,false,null,'Your Account is Deactivate !');
                }
            }
            else{
                // getResponse(status,redirect,reload,url,message)
                $response =  getResponse(false,false,false,null,'Your Password is Invalid !');
            }
        }
        else{
            // getResponse(status,redirect,reload,url,message)
            $response =  getResponse(false,false,false,null,'Email Not Register !');
        }

        return $response;

    }

}
