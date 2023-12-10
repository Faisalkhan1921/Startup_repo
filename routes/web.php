<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ShowLogsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AdminVendorController;
use App\Http\Controllers\Auth\CustomLoginController;
use App\Http\Controllers\CustomLoginController as ControllersCustomLoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('vendor.index');
});

Route::get('/email/view',[EmailController::class,'index'])->name('email.send');
Route::post('/email/send',[EmailController::class,'send'])->name('send.email');


Route::get('/Alerts/Notification',[ShowLogsController::class,'index']);

Route::controller(AdminController::class)->group(function (){
    Route::get('/admin/logout','destroy')->name('admin.logout');
    Route::get('/admin/profile','profile')->name('admin.profile');
    
    Route::get('/edit/profile','editprofile')->name('edit.profile');
    Route::post('/store/profile','StoreProfile')->name('store.profile');
    Route::get('/admin/change_password','ChangePassword')->name('change.password');
    Route::post('/update/password','UpdatePassword' )->name('update.password');
    
    
    });

    Route::get('register/vendor',[VendorController::class,'index'])->name('register.vendor');
    Route::post('store/vendor',[VendorController::class,'store'])->name('vendor.store');

    Route::get('white/list',[AdminVendorController::class,'index'])->name('white.list');
Route::get('/dashboard', function () {
    $id = Auth::id();
    $iddata = app('App\Models\User')->find($id);

    $mydata = app('App\Models\User')->orderBy('created_at', 'desc')->get();
    return view('index',compact('iddata','mydata'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
