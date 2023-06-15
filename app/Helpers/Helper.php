<?php

use App\Models\SetPermission;
use GuzzleHttp\Client as GuzzleClient;
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
