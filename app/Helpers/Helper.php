<?php

use App\Models\LogModel;
use App\Models\SetPermission;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;
use App\Models\User;
use App\Models\UserPermission;
function getLogInUserPermission($page)
{
    $user_id = User::with(['role'])->find(session()->get('AdminId'));
    if(isset($user_id->roll)){
        if($user_id->role->all == '1')
        {
            return true;
        }
        else{
            permissionPageAccess($page,$user_id);
        }
    }
    else{
        return true;
    }
}

function permissionPageAccess($page,$user_id)
{
    $response = [];
    $setpermission = SetPermission::with(['permission'])->where('role_id',$user_id->role_id)->get();
    if($setpermission->count() > 0)
    {
        foreach ($setpermission as $key => $route) {
            $response[]=$route->permission->slug;
        }
    }
    if(in_array($page,$response)){
        return true;
    }
    else{
        return false;
    }
}

function getResponse($status,$redirect,$reload,$url,$message)
{
    return json_encode(
        [
            'status'=>$status,
            'redirect'=>$redirect,
            'reload'=>$reload,
            'url'=>$url,
            'message'=>$message
        ]);
}

function getActiveAdminDetails(){
    $id = Session::get('AdminId');
    return User::with('role')->find($id);
}

function save_log($request){
   $data = new LogModel;
   $data->patient_id = $request['patient_id'];
   $data->user_id = $request['user_id'];
   $data->log_title = $request['log_title'];
   $data->log_type = $request['log_type'];
   $data->description = $request['description'];
   $data->ip_address = $request['ip_address'];
  $data->save();
  return true;
}
function Reference_id()
{
    $rand = rand(00000000,99999999);
    $Reference_id = "QPHTID".$rand;
    return $Reference_id;
}

function DateTime()
{
  $currentTime = Carbon::now();
  return $currentTime->toDateTimeString();
}

function encryptPassword($password){
  $ciphering = "AES-128-CTR";
  $options   = 0;
  $iv = 'CreateByBapi@#$%^&*()@#$';
  $encryption_iv = substr(hash('sha256', $iv), 0, 16);
  $encryption_key = "Bapi@1234";
  $encryption = openssl_encrypt($password, $ciphering, $encryption_key, $options, $encryption_iv);
  return base64_encode($encryption);
  }

function decryptPassword($password){
  $ciphering = "AES-128-CTR";
  $iv = 'CreateByBapi@#$%^&*()@#$';
  $decryption_iv = substr(hash('sha256', $iv), 0, 16);
  $decryption_key = "Bapi@1234";
  $decryption = openssl_decrypt(base64_decode($password), $ciphering, $decryption_key, 0, $decryption_iv);
  return $decryption;
}

function getPatientDischarge($value) {
    switch ($value) {
        case '0':
            $value = "No";
            break;
        case '1':
            $value = "Discharge Mode";
            break;
        case '2':
            $value = "Refer Mode";
            break;
        case '3':
            $value = "DORB Mode";
            break;
        default:
            $value = "";
            break;
    }
    return $value;
}

function getStatus($value) {
    switch ($value) {
        case '0':
            $value = "Dactive";
            break;
        case '1':
            $value = "Active";
            break;
        default:
            $value = "";
            break;
    }
    return $value;
}
