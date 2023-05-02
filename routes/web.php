<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminListController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TodoListController;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/blog',([BlogController::class,'get']));

Route::resource('blogs',BlogsController::class);

// Route::resource('post',PostController::class);

//manually

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route prefix group

Route::group(['prefix'=>'admin'],function (){

Route::get('blog',[BlogController::class,'index'])->name('blog.index');

Route::get('blog/create',[BlogController::class,'create'])->name('blog.create');

Route::post('blog/store',[BlogController::class,'store'])->name('blog.store');

Route::get('blog/edit/{blog}',[BlogController::class,'edit'])->name('blog.edit');

Route::get('blog/show/{blog}',[BlogController::class,'show'])->name('blog.show');

Route::post('blog/update/{blog}',[BlogController::class,'update'])->name('blog.update');

Route::post('blog/delete/{blog}',[BlogController::class,'destroy'])->name('blog.destroy');

Route::get('admin',[AdminController::class,'index'])->name('admin');

Route::get('admin/widget',[AdminController::class,'widget'])->name('admin.widget');

Route::resource('adminList',AdminListController::class);

Route::resource('role',RoleController::class);

Route::resource('permission',PermissionController::class);

Route::resource('post',PostController::class);

Auth::routes(['register'=>false]);

});

//customer route

Route::get('customer/home',[CustomerController::class,'customerHome'])->name('customer.home');
Route::get('customer/create',[CustomerController::class,'customerCreate'])->name('customer.create');
Route::post('customer/insert',[CustomerController::class,'customerInsert'])->name('customer.insert');
Route::get('customer/edit/{id}',[CustomerController::class,'customerEdit'])->name('customer.edit');
Route::post('customer/update/{id}',[CustomerController::class,'customerUpdate'])->name('customer.update');
Route::get('customer/view/{id}',[CustomerController::class,'customerView'])->name('customer.view ');
Route::post('customer/delete/{id}',[CustomerController::class,'customerDelete'])->name('customer.delete');


// My todo List

Route::get('todo/create',[TodoListController::class,'create'])->name('todo.create');