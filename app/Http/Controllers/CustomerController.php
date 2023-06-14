<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Booking;
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
       // $customer->customer_id=$req->customer_id;
    $customer->customer_name=$req->customer_name;
    $customer->service= $req->service;
    $customer->number= $req->number;
    $customer->address=$req->address;
    $customer->email= $req->email;
    $customer->service_id= $req->service_id;
    $customer->booking_id= $req->booking_id;
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
    $customer=Customer::find($customer_id);
    $result=$customer->delete();
    $getData=Customer::all();
    if(!$customer){
        return ["id"=>"not found"];
    }
    if($result){
        return view("customer",["getData"=>$getData]);
    }else{
        return ["id"=>"not found"];
    }
   }
   
   public function customerForm($id=""){
    $data=$id;
    if($id){
    $data=Customer::find($id);
    return view("customer_form",["data"=>$data]);}
    else{
        return view("customer_form",["data"=>null]);
    }
   
    
   }
   public function customersDetails(){
    $customer=Customer::all();
     return view("customer",["getData"=>$customer]);
   }
   public function profile(){
    return view("components.customer_navbar");
   }
 

   public function deleteCust($id){
    $customer=Customer::find($id);
    $customer->delete();
    $customer=Customer::all();
     return view("customer",["getData"=>$customer]);
    
   }
   public function updateCustomer(Request $req){

    $customer=Customer::find($req->customer_id);
    if($customer){
       // $customer->customer_id=$req->customer_id;
    $customer->customer_name=$req->customer_name;
    $customer->service= $req->service;
    $customer->number= $req->number;
    $customer->address=$req->address;
    $customer->email= $req->email;
    $customer->service_id= $req->service_id;
    $customer->save();

    $customers=Customer::all();
    return view("customer",["getData"=>$customers]);

   }
}
public function customerRequestForService(Request $req){
    $customer=Customer::find($req->customer_id);
    $service=Service::find($req->service_id);
    $booking=new Booking();
    $booking->action="requested";
    $booking->customer_id=$customer->customer_id;
    $booking->service_id=$service->service_id;
    $booking->save();

}
}
