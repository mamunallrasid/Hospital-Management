<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Common\RefreshCaptcha;
use App\Http\Controllers\Backend\Login\AdminLoginController;
use App\Http\Controllers\Backend\Dashboard\AdminDashboard;
use App\Http\Controllers\Backend\Dashboard\Blog\BlogController;
use App\Http\Controllers\Backend\Dashboard\Role\RoleController;
use App\Http\Controllers\Backend\Dashboard\Product\BrandController;
use App\Http\Controllers\Backend\Dashboard\Product\CategoryController;
use App\Http\Controllers\Backend\Dashboard\Product\SubCategoryController;
use App\Http\Controllers\Backend\Dashboard\Permission\PermissionController;
use App\Http\Controllers\Backend\Dashboard\SetPermission\SetPermissionController;
use App\Http\Controllers\Backend\Dashboard\User\UserManageController;
use App\Http\Controllers\Common\CKEditorController;
/*----------------------------- Customer Coontroller------------------------- */

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\Auth\AuthController;
use App\Http\Controllers\Backend\Dashboard\Patient\PatientController;
use App\Http\Controllers\Backend\Dashboard\Service\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/* ------------------------------------------------------ Common Route ..................................... */
// ck editor file upload path
Route::post('ck-editor/file-upload',[CKEditorController::class,'fileUpload'])->name('ck-editor/file-upload');


// login route

Route::get('refresh-raptcha',[RefreshCaptcha::class,'refreshCapthaCode'])->name('refresh-raptcha');
Route::group(['prefix'=>'admin','middleware' => 'login.auth'],function(){

Route::get('login',[AdminLoginController::class,'index'])->name('admin.login');
Route::post('login-request',[AdminLoginController::class,'loginRequest'])->name('admin.login-request');

});
/*----------------------------------- Role Route Start ------------------------------- */

Route::group(['prefix'=>'admin','middleware'=>'dashboard.auth'],function(){

    Route::get('dashboard',[AdminDashboard::class,'dashboard'])->name('admin.dashboard');
    Route::post('admin/logout',[AdminLoginController::class,'logoutRequest'])->name('admin.logout');

    /* ----------------------------Brand Route -------------------------------------------- */
    Route::get('brand/create',[BrandController::class,'create'])->name('admin.brand.create');
    Route::get('brand/view',[BrandController::class,'view'])->name('admin.brand.view');
    Route::get('brand/{id}/edit',[BrandController::class,'edit'])->name('admin.brand.edit');
    Route::post('brand/delete',[BrandController::class,'delete'])->name('admin.brand.delete');
    Route::post('brand/status',[BrandController::class,'status'])->name('admin.brand.status');

    /* ----------------------------Category Route -------------------------------------------- */
    Route::get('category/create',[CategoryController::class,'create'])->name('admin.category.create');
    Route::get('category/view',[CategoryController::class,'view'])->name('admin.category.view');
    Route::get('category/{id}/edit',[CategoryController::class,'edit'])->name('admin.category.edit');
    Route::post('category/delete',[CategoryController::class,'delete'])->name('admin.category.delete');
    Route::post('category/status',[CategoryController::class,'status'])->name('admin.category.status');

    /* ----------------------------Blog Route -------------------------------------------- */
    Route::get('blog/create',[BlogController::class,'create'])->name('admin.blog.create');
    Route::get('blog/view',[BlogController::class,'view'])->name('admin.blog.view');
    Route::get('blog/{id}/edit',[BlogController::class,'edit'])->name('admin.blog.edit');
    Route::post('blog/delete',[BlogController::class,'delete'])->name('admin.blog.delete');
    Route::post('blog/status',[BlogController::class,'status'])->name('admin.blog.status');

    /* ----------------------------Sub Category Route -------------------------------------------- */
    Route::get('sub-category/create',[SubCategoryController::class,'create'])->name('admin.sub-category.create');
    Route::get('sub-category/view',[SubCategoryController::class,'view'])->name('admin.sub-category.view');
    Route::get('sub-category/{id}/edit',[SubCategoryController::class,'edit'])->name('admin.sub-category.edit');
    Route::post('sub-category/delete',[SubCategoryController::class,'delete'])->name('admin.sub-category.delete');
    Route::post('sub-category/status',[SubCategoryController::class,'status'])->name('admin.sub-category.status');

    /* ----------------------------Role Route -------------------------------------------- */
    Route::get('role/create',[RoleController::class,'create'])->name('admin.role.create');
    Route::get('role/view',[RoleController::class,'view'])->name('admin.role.view');
    Route::get('role/{id}/edit',[RoleController::class,'edit'])->name('admin.role.edit');
    Route::post('role/delete',[RoleController::class,'delete'])->name('admin.role.delete');
    Route::post('role/status',[RoleController::class,'status'])->name('admin.role.status');



    /* ----------------------------Permission Route -------------------------------------------- */
    Route::get('permission/create',[PermissionController::class,'create'])->name('admin.permission.create');
    Route::get('permission/view',[PermissionController::class,'view'])->name('admin.permission.view');
    Route::get('permission/{id}/edit',[PermissionController::class,'edit'])->name('admin.permission.edit');
    Route::post('permission/delete',[PermissionController::class,'delete'])->name('admin.permission.delete');
    Route::post('permission/status',[PermissionController::class,'status'])->name('admin.permission.status');

    /* ----------------------------User Route -------------------------------------------- */
    Route::get('user/create',[UserManageController::class,'create'])->name('admin.user.create');
    Route::get('user/view',[UserManageController::class,'view'])->name('admin.user.view');
    Route::get('user/{id}/edit',[UserManageController::class,'edit'])->name('admin.user.edit');
    Route::post('user/delete',[UserManageController::class,'delete'])->name('admin.user.delete');
    Route::post('user/status',[UserManageController::class,'status'])->name('admin.user.status');
    Route::get('user/{id}/permission',[UserManageController::class,'userPermission'])->name('admin.user.permission');

    /* ----------------------------Patient Route -------------------------------------------- */
    Route::get('patient/create',[PatientController::class,'create'])->name('admin.patient.create');
    Route::get('patient/view',[PatientController::class,'view'])->name('admin.patient.view');
    Route::get('patient/{id}/edit',[PatientController::class,'edit'])->name('admin.patient.edit');
    Route::post('patient/delete',[RoleController::class,'delete'])->name('admin.patient.delete');
    Route::post('patient/status',[PatientController::class,'status'])->name('admin.patient.status');
    Route::post('patient/followup',[PatientController::class,'delete'])->name('admin.patient.followup');
    Route::post('patient/discharge',[PatientController::class,'status'])->name('admin.patient.discharge');

    /* ----------------------------Service Route -------------------------------------------- */
    Route::get('service/create',[ServiceController::class,'create'])->name('admin.service.create');
    Route::get('service/view',[ServiceController::class,'view'])->name('admin.service.view');
    Route::post('service/delete',[ServiceController::class,'delete'])->name('admin.service.delete');
    Route::get('service/{id}/edit',[ServiceController::class,'edit'])->name('admin.service.edit');

});


   /* ----------------------------Ajax Admin Request Route -------------------------------------------- */

Route::group(['prefix'=>'admin','middleware'=>'ajax-request.auth'],function(){

    Route::post('brand/store',[BrandController::class,'store'])->name('admin.brand.store');
    Route::get('brand/display',[BrandController::class,'display'])->name('admin.brand.display');
    Route::post('brand/update',[BrandController::class,'update'])->name('admin.brand.update');
    /* ----------------------------Brand Route End-------------------------------------------- */

    Route::post('category/store',[CategoryController::class,'store'])->name('admin.category.store');
    Route::get('category/display',[CategoryController::class,'display'])->name('admin.category.display');
    Route::post('category/update',[CategoryController::class,'update'])->name('admin.category.update');
    /* ----------------------------Category Route End-------------------------------------------- */

    Route::post('blog/store',[BlogController::class,'store'])->name('admin.blog.store');
    Route::get('blog/display',[BlogController::class,'display'])->name('admin.blog.display');
    Route::post('blog/update',[BlogController::class,'update'])->name('admin.blog.update');
    /* ----------------------------Category Route End-------------------------------------------- */

    Route::post('sub-category/store',[SubCategoryController::class,'store'])->name('admin.sub-category.store');
    Route::get('sub-category/display',[SubCategoryController::class,'display'])->name('admin.sub-category.display');
    Route::post('sub-category/update',[SubCategoryController::class,'update'])->name('admin.sub-category.update');
    /* ----------------------------Category Route End-------------------------------------------- */

    Route::post('role/store',[RoleController::class,'store'])->name('admin.role.store');
    Route::get('role/display',[RoleController::class,'display'])->name('admin.role.display');
    Route::post('role/update',[RoleController::class,'update'])->name('admin.role.update');
    /* ----------------------------Role Route End-------------------------------------------- */

    Route::post('permission/store',[PermissionController::class,'store'])->name('admin.permission.store');
    Route::get('permission/display',[PermissionController::class,'display'])->name('admin.permission.display');
    Route::post('permission/update',[PermissionController::class,'update'])->name('admin.permission.update');
    /* ----------------------------Permission Route End-------------------------------------------- */

    Route::post('user/store',[UserManageController::class,'store'])->name('admin.user.store');
    Route::get('user/display',[UserManageController::class,'display'])->name('admin.user.display');
    Route::post('user/update',[UserManageController::class,'update'])->name('admin.user.update');

   /* ----------------------------User Route End-------------------------------------------- */
   Route::post('patient/store',[PatientController::class,'store'])->name('admin.patient.store');
   Route::get('patient/display',[PatientController::class,'display'])->name('admin.patient.display');
   Route::post('patient/update',[PatientController::class,'update'])->name('admin.patient.update');
   /* ----------------------------Patient Route End-------------------------------------------- */

    /* ----------------------------Service Route End-------------------------------------------- */
    Route::post('service/store',[ServiceController::class,'store'])->name('admin.service.store');
    Route::get('service/display',[ServiceController::class,'display'])->name('admin.service.display');
    Route::post('service/update',[ServiceController::class,'update'])->name('admin.service.update');
    /* ----------------------------Service Route End-------------------------------------------- */

});


/* ------------------------------------------------------ Backend Route ..................................... */
// include(__DIR__.'\backend\common.php');

/* ------------------------------------------------------ Backend Route end ..................................... */




/* ------------------------------------------------------ Frontend Route ..................................... */
// include(__DIR__.'\frontend\common.php');
Route::get('/',[HomeController::class,'index']);
Route::get('/cart',[HomeController::class,'cartDisplay'])->name('webpage.cart');

Route::post('add-to-cart',[AddToCartController::class,'addToCart']);
Route::get('/load-cart-data',[AddToCartController::class,'cartLoad']);
Route::delete('delete-from-cart',[AddToCartController::class,'deleteFromCart']);

Route::get('/checkout',[HomeController::class,'checkout']);

Route::get('/about',[HomeController::class,'about'])->name('webpage.about');
Route::get('/contact',[HomeController::class,'contact'])->name('webpage.contact');
Route::get('/blog',[HomeController::class,'blog'])->name('webpage.blog');
Route::get('/login',[HomeController::class,'login'])->name('webpage.login');
Route::get('/signup',[HomeController::class,'signup'])->name('webpage.signup');

// register user
Route::post('register/customer',[AuthController::class,'registerUser'])->name('webpage.register-request');
Route::post('login/customer',[AuthController::class,'loginUser'])->name('webpage.login-request');

// Route::get('/refresh-raptcha',[RefreshCaptcha::class,'refreshCapthaCode']);
// Route::group(['middleware' => ['CustomerMiddleware']],function(){
//     Route::get('/account',[HomeController::class,'userAccount'])->name('account');
//     Route::get('/logout',[HomeController::class,'logoutUser'])->name('logout');
// });
/* ------------------------------------------------------ Frontend Route end ..................................... */



