<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;

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
Route::post("/addCustomer",[CustomerController::class,"add"]);
Route::get("/getCustomer/{customer_id?}",[CustomerController::class,"get"]);

Route::post("/updateCustomer",[CustomerController::class,"updateCustomer"]);


Route::get("/deleteCustomer/{id}",[CustomerController::class,"delete"]);

Route::get("/updateCustomers/{id?}",[CustomerController::class,"customerForm"]);

Route::get("/adminpage",[AdminController::class,"adminPageFromLogin"]);
Route::post("/admin",[AdminController::class,"adminPage"]);


Route::get("/updateServices/{id?}",[ServiceController::class,"servicePage"]);
Route::post("/serviceform",[ServiceController::class,"servicePage"]);

Route::post("/customerform",[CustomerController::class,"customerForm"]);
Route::get("/customers",[CustomerController::class,"customersDetails"]);
Route::get("/services",[ServiceController::class,"ServiceDetails"]);
Route::get("/bookings",[BookingController::class,"BookingDetails"]);
Route::get("/dashboard",[DashboardController::class,"Dashboard"]);

Route::get("/profile",[CustomerController::class,"profile"]);

Route::post("/updateService",[ServiceController::class,"updateServices"]);
Route::get("/deleteServices/{id}",[ServiceController::class,"deleteServices"]);
