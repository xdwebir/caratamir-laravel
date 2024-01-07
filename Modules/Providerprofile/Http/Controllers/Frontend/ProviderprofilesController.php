<?php

namespace Modules\Providerprofile\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Laracasts\Flash\Flash;
use Modules\Providerprofile\Models\Providerprofile;
use Modules\Service\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProviderprofilesController extends Controller
{
    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Providerprofiles';

        // module name
        $this->module_name = 'providerprofiles';

        // directory path of the module
        $this->module_path = 'providerprofile::frontend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Providerprofile\Models\Providerprofile";
    }

    public function edit($id){

        $profile = Providerprofile::where('user_id','=',$id)
        ->join('services','providerprofiles.service_id','=','services.id')
        ->select('providerprofiles.*', 'services.name as servicename',  'providerprofiles.name as providerprofilename')
        ->first();
        $services = Service::all();
        return view('providerprofile::frontend.providerprofiles.edit',['profile'=>$profile,'services'=>$services]);
    }
    public function update($id,Request $request)
    {
        $validatedData = $request->validate([
            'city_id' => ['required'],
            'city_name' => ['required'],
            'state_name' => ['required'],
            'state_id' => ['required'],
            'service_id' => ['required'],
            'start_time' => ['required'],
            'end_time' => ['required'],
        ]);

        $profile = Providerprofile::where('user_id','=',Auth()->user()->id)->first();
        if($profile!=null){
            $profile->state_id = $request->state_id;
            $profile->city_id = $request->city_id;
            $profile->service_id = $request->service_id;
            $profile->city_name = $request->city_name;
            $profile->state_name = $request->state_name;
            $profile->start_time = $request->start_time;
            $profile->end_time = $request->end_time;
            Flash::success("<i class='fas fa-check'></i> پروفایل شما ویرایش شد")->important();
            $profile->save();
        }else{
            $validatedData['user_id'] = Auth()->user()->id;
            $validatedData['name'] = 'ایجاد شد';
            $providerprofile = Providerprofile::create($validatedData);
            Flash::success("<i class='fas fa-check'></i> پروفایل شما ساخته شد")->important();

        }
        return redirect()->back();
    }
}
