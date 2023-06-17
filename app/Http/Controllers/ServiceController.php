<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function add(Request $request)
    {
        $service = new Service();
        $service->service_id=$request->service_id;
        $service->service_name = $request->service_name;
        $service->service_provider = $request->service_provider;
        $service->provider_number = $request->provider_number;
        $service->provider_gender = $request->provider_gender;
        $service->address=$request->address;
        $service->customer_id=$request->customer_id;
        $result = $service->save();
        if ($result) {
            return ['data' => 'inserted'];
        } else {
            return ['data' => 'not inserted'];
        }
    }
    public function getAll($service_id=null)
    {
        return $service_id ? Service::find($service_id) :  Service::all();
    }

    public function update(Request $request){
        $service = Service::find($request->service_id);
        $service->service_id=$request->service_id;
        $service->service_name = $request->service_name;
        $service->service_provider = $request->service_provider;
        $service->provider_number = $request->provider_number;
        $service->provider_gender = $request->provider_gender;
        $service->address=$request->address;
        $service->customer_id = $request->customer_id;
        $result=$service->save();
        if ($result) {
            return ["result" => "data has been updated"];
        } else {
            return ["result" => "data has not been updated"];
        }
        
    }

    public function delete($service_id)
    {
        $service = Service::find($service_id)->first();
        $result = $service->delete();
        if ($result) {
            return ["result" => "Data has ben deleted"];
        } else {
            return ["result" => "Data has not been deleted"];
        }
    }

    public function servicePage($id=null){
        if($id){
            $data=Service::find($id);
            return view("serviceForm",["data"=>$data]);
        }else{
            return view("serviceForm",["data"=>null]);
        }
        
    }

    public function serviceDetails()
    {$ser=Service::all();
        return view("servicer.service_profile",['service'=>$ser]);
    }

    public function updateServices(Request $request){
        $service=Service::find($request->service_id);
      
        $service->service_name = $request->service_name;
        $service->service_provider = $request->service_provider;
        $service->provider_number = $request->provider_number;
        $service->provider_gender = $request->provider_gender;
        $service->address=$request->address;
        $service->customer_id = $request->customer_id;
        $service->save();
        return view("service",["ser"=>Service::all()]);
    }

    public function deleteServices($id){
        $service=Service::find($id);
        $service->delete();
        return view("service",["ser"=>Service::all()]);
    }

    public function serviceAvailable($name){
        
        $services=Service::where("provider_service",$name)->get();
        //dd($services);
        return view("service_available",["services"=>$services]);
       }

       public function service_profile_request(){
        return view("servicer/service_profile");
       }
       public function service_form(){
        return view("servicer/service-form");
       }

       public function addServicer(Request $request){
        $service = new Service();
        $service->provider_name = $request->provider_name;
        $service->provider_address = $request->provider_address;
        $service->provider_experience = $request->provider_experience;
        $service->provider_gender=$request->provider_gender;
        $service->provider_email=$request->provider_email;
        $service->provider_number=$request->provider_number;
        $service->provider_password=$request->provider_password;
        $service->provider_confirm_password=$request->provider_confirm_password;
        $service->provider_service=$request->provider_service;

        // $image=$request->input('provider_photo');
        //     $new_name=rand().'.'.$image->getClientOriginalExtension();
        //    $image->move(public_path('/uploads/images'),$new_name);  
        //     $service->provider_photo=$request->provider_photo;
          $result=$service->save();

        if($result){
            
        }else{
            
        }

        
       }
       public function servicer_login(Request $request){
        return view("servicer/servicer_login");
     
      }
      public function servicerLoggedIn(Request $request){
        $service=Service::where('provider_email',"=",$request->provider_email)->first();
        if(empty($service)){
            return ["email"=>"invalid"];
        }
            if($service->provider_password===$request->provider_password)
            return view("servicer/service_profile",["service_provider"=>$service]);
            else return ["password"=>"did not match"];  
      }

      public function servicer_request(){
        return view("servicer/servicer_request");
      }
}