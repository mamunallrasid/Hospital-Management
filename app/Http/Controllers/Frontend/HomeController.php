<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{

    // public function index(Request $rqst)
    // {
    //     $product = ProductDetails::with('product')->with('productImages')->get();
    //     return view('webpage/index',compact('product'));
    // }

    // public function cartDisplay()
    // {
    //     $cookie_data = stripslashes(Cookie::get('shopping_cart'));
    //     $cart_data = json_decode($cookie_data, true);
    //     return view('webpage/cart',compact('cart_data'));
    // }

    // public function checkout()
    // {
    //     $product = ProductDetails::with('product')->with('productImages')->get();
    //     return view('webpage/checkout',compact('product'));
    // }



    // public function logoutUser(Request $rqst)
    // {

    //  if($rqst->session()->has('CUSTOMER_TOKEN') && $rqst->session()->has('CUSTOMER_ID'))
    //  {
    //      date_default_timezone_set('Asia/Kolkata');
    //      $date = date("Y-m-d");
    //      $time = date("g:i:s A");
    //      $rqst->session()->pull('CUSTOMER_TOKEN',null);
    //      $rqst->session()->pull('CUSTOMER_ID',null);
    //  }
    //  return redirect()->back()->with(['logout_message'=>'Logout Successfully']);

    // }

    // public function userAccount(Request $rqst)
    // {
    //     $user_data = Helper::getUser();
    //     return view('webpage.my-account');
    // }

    public function about()
    {
       return view('frontend.webpage.about');
    }
    public function blog()
    {
       return view('frontend.webpage.blog');
    }
    public function contact()
    {
       return view('frontend.webpage.contact');
    }
    public function signup()
    {
       return view('frontend.webpage.register');
    }
    public function login()
    {
       return view('frontend.webpage.login');
    }



}
?>
