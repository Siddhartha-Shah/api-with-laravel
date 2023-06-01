<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;

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

Route::get("/signup",[UserController::class,"signUpForWeb"]);
Route::post("/signup",[UserController::class,"signup"]);

Route::get("/login",[UserController::class,"loginPage"]);
Route::post("/login",[UserController::class,"login"]);


Route::post("/addService",[ServiceController::class,"add"]);
Route::get("/getService/{service_id?}",[ServiceController::class,"getAll"]);
Route::put("/updateService",[ServiceController::class,"update"]);
Route::delete("/deleteService/{service_id}",[ServiceController::class,"delete"]);

Route::post("/addCustomer",[CustomerController::class,"add"]);
Route::get("/getCustomer/{customer_id?}",[CustomerController::class,"get"]);
Route::put("/updateCustomer",[CustomerController::class,"update"]);
Route::delete("/deleteCustomer/{customer_id}",[CustomerController::class,"delete"]);
//Route::get("/admin",[AdminController::class,"adminPage"]);

Route::post("/admin",[AdminController::class,"adminPage"]);
