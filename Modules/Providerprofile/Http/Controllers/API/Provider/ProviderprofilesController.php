<?php

namespace Modules\Providerprofile\Http\Controllers\API\Provider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Laracasts\Flash\Flash;
use Modules\Providerprofile\Models\Providerprofile;
use Modules\Service\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\QueryBuilder;

class ProviderprofilesController extends Controller
{
    public function profile()
    {
        $profile = QueryBuilder::for(Providerprofile::class)
            ->where('user_id', '=', Auth()->user()->id)
            ->select(['city_name', 'state_name', 'start_time', 'end_time', 'address','services_id'])
            ->first();



        if ($profile) {

            $profile->services_name = " ";
            $services_id = json_decode($profile->services_id, TRUE);
            foreach ($services_id as $service_id) {
                $profile->services_name .= Service::findOrFail($service_id)->name;
                $profile->services_name .= ", ";
            }
            $profile->status = 1;
            return $profile;
        } else {
            return ['status' => 0];
        }
    }

    public function editProfile(Request $request)
    {
        $validatedData = $request->validate([
            'city_id' => ['required'],
            'city_name' => ['required'],
            'state_name' => ['required'],
            'state_id' => ['required'],
            'services_id' => ['required'],
            'start_time' => ['required'],
            'end_time' => ['required'],
            'address' => ['required'],

        ]);
        $profile = Providerprofile::where('user_id', '=', Auth()->user()->id)->first();
        if ($profile != null) {
            $profile->state_id = $request->state_id;
            $profile->city_id = $request->city_id;
            $profile->services_id = $request->services_id;
            $profile->city_name = $request->city_name;
            $profile->state_name = $request->state_name;
            $profile->start_time = $request->start_time;
            $profile->end_time = $request->end_time;
            $profile->address = $request->address;

            $profile->save();
        } else {
            $validatedData['user_id'] = Auth()->user()->id;
            $validatedData['name'] = 'ایجاد شد';
            $providerprofile = Providerprofile::create($validatedData);
        }
        return ['status' => 1];
    }
}
