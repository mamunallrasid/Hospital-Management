<?php
namespace App\Http\Controllers\Common;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;

class RefreshCaptcha extends Controller
{
    public function refreshCapthaCode()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
?>
