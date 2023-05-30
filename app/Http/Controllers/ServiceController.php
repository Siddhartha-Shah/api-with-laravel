<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

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

}
