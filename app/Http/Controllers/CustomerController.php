<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
   public function add(Request $req){
    $customer=new Customer();
    $customer->customer_id=$req->customer_id;
    $customer->customer_name=$req->customer_name;
    $customer->service= $req->service;
    $customer->number= $req->number;
    $customer->address=$req->address;
    $customer->email= $req->email;
    $result=$customer->save();
    if($result){
        return ["data"=>"sucessfully entered"];
    }else{
        return ["data"=>"not entered"];
    }
   }

   public function get($customer_id=null){
    return $customer_id ? Customer::find($customer_id) : Customer::all();
   }
   public function update(Request $req){
    $customer=Customer::find($req->customer_id)->first();
    if($customer){
        $customer->customer_id=$req->customer_id;
    $customer->customer_name=$req->customer_name;
    $customer->service= $req->service;
    $customer->number= $req->number;
    $customer->address=$req->address;
    $customer->email= $req->email;
    $result=$customer->save();
    if($result){
        return ["data"=>"sucessfully updated"];
    }else{
        return ["data"=>"not updated"];
    }
    }else{
        return ["id"=>"not found"];
    }
   }


   public function delete($customer_id){
    $customer=Customer::find($customer_id)->first();
    if($customer){
        return $customer->delete();
    }else{
        return ["id"=>"not found"];
    }
   }
}
