<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BookingController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/signup",[UserController::class,"signup"]);
Route::post("/signup",[UserController::class,"signup"]);

Route::get("/login",[UserController::class,"login"]);
Route::post("/login",[UserController::class,"login"]);


Route::post("/addService",[ServiceController::class,"add"]);
Route::get("/getService/{service_id?}",[ServiceController::class,"getAll"]);
Route::put("/updateService",[ServiceController::class,"update"]);
Route::delete("/deleteService/{service_id}",[ServiceController::class,"delete"]);

Route::post("/addCustomer",[CustomerController::class,"add"]);
Route::get("/getCustomer/{customer_id?}",[CustomerController::class,"get"]);
Route::put("/updateCustomer",[CustomerController::class,"update"]);
Route::delete("/deleteCustomer/{customer_id}",[CustomerController::class,"delete"]);

Route::get("/getCustomers",[IndexController::class,"index"]);
Route::get("/getServices",[IndexController::class,"index2"]);

Route::get("/getBookingForCustomer",[BookingController::class,"getBookingForCustomer"]);
Route::get("/getBookingForService",[BookingController::class,"getBookingForService"]);
Route::get("/getBooking",[BookingController::class,"getBookingForCustomer"]);
Route::get("/getAllBooking",[BookingController::class,"BookingDetails"]);