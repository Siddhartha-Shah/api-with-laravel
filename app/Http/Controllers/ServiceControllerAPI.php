<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
class ServiceControllerAPI extends Controller
{
    public function addServicer(Request $request){
        $service = new Service();
        $service->provider_name = $request->provider_name;
        $service->provider_address = $request->provider_address;
        $service->provider_experience = $request->provider_experience;
        $service->provider_gender=$request->provider_gender;
        $service->provider_email=$request->provider_email;
        $service->provider_number=$request->provider_number;
        $service->provider_service=$request->provider_service;
        $fileName=time().$request->file('provider_photo')->getClientOriginalName();
        $path=$request->file('provider_photo')->storeAs('images',$fileName,'public');
        $request->provider_photo["provider_photo"]='/storage/'.$path;
        Service::create($request->provider_photo);
        $result=$service->save();
        if($result){
            return ["data"=>"Inserted"];
        }else{
            return ["data"=>"Not Inserted"];
        }
    }
}
