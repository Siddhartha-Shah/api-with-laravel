<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Booking;
class CustomerController extends Controller
{
   
   
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

public function customer_login(Request $req){
    return view("customer.customer_login");
}
public function customer_logged_in(Request $request){
    $customer=Customer::where('customer_email',"=",$request->customer_email)->first();
        if(empty($customer)){
            return ["email"=>"invalid"];
        }
            if($customer->customer_password===$request->customer_password){
                $request->session()->put($request->customer_email);
                $request->session()->put($request->customer_password);
                
                return view("customer/customer_profile",["customer"=>$customer]);
            }
            
            else return ["password"=>"did not match"];  
    
}

public function customer_service(){
    return view("customer.customer_service");
}
}
