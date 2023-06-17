<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Customer;
use App\Models\Booking;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
    public function add(Request $request)
    {
        $service = new Service();
        $service->provider_name = $request->provider_name;
        $service->provider_address = $request->provider_address;
        $service->provider_experience = $request->provider_experience;
        $service->provider_gender=$request->provider_gender;
        $service->provider_email=$request->provider_email;
        $service->provider_number=$request->provider_number;
        $service->provider_password=$request->provider_password;

        $service->provider_service=$request->provider_service;
        $result = $service->save();
        if ($result) {
            return redirect('service');
        } else {
            return ['data' => 'not inserted'];
        }
    }
    public function getAll($service_id=null)
    {
        return $service_id ? Service::find($service_id) :  Service::all();
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

    public function serviceDetailForAdmin()
    {$ser=Service::all();
        return view("service",['ser'=>$ser]);
    }

    public function serviceDetails()
    {$ser=Service::all();
        return view("servicer.service_profile",['service'=>$ser]);
    }

    public function updateServices(Request $request){
        $service = Service::find($request->service_id);
        $service->provider_name = $request->provider_name;
        $service->provider_address = $request->provider_address;
        $service->provider_experience = $request->provider_experience;
        $service->provider_gender = $request->provider_gender;
        $service->provider_email=$request->provider_email;
        $service->provider_number = $request->provider_number;
        $service->provider_password=$request->provider_password;
        $service->provider_service = $request->provider_service;
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
        if(session()->has('service_provider')){
            return view("servicer/service_profile");
        }
        return view("servicer/servicer_login");
     
      }

      public function servicer_logout(Request $request){
        if(session()->has('service_provider')){
            session()->pull('service_provider');
            session()->pull('service_id');
        }
        return view("servicer/servicer_login");
     
      }

      public function servicerLoggedIn(Request $request){
        $services=Service::where('provider_email',"=",$request->provider_email)->first();
        if(empty($services)){
            return ["email"=>"invalid"];
        }
            if($services->provider_password===$request->provider_password){
                $request->session()->put("service_provider",[$services->provider_name,$services->provider_experience,$services->provider_address,$services->provider_number,$services->provider_email]);
                $request->session()->put("service_id",$services->service_id);
              //echo(session("service_provider")[0]);
                
                return view("servicer/service_profile");
            }
            
            else return ["password"=>"did not match"];  
      }

      public function servicer_request(){
        $booking=Booking::with('customer')->get();
        echo "<pre>";
        print_r($booking[0]['customer'][0]->customer_id);
        echo "</pre>";
        //return view("servicer/servicer_request");
      }

      public function selectService($s_id){
        $booking=new Booking();
        $booking->action="requested";
        $booking->customer_id=session('customer_id');
        $booking->service_id=$s_id;
        $booking->save();
        $customer=Customer::find(session('customer_id'));
        $customer->booking_id=$booking->id;
        $customer->save();
        $service=Service::find($s_id);
        $service->booking_id=$booking->id;
        $service->save();
        // echo "<pre>";
        // print_r($booking->booking_id);
        // echo "</pre>";

      }
}