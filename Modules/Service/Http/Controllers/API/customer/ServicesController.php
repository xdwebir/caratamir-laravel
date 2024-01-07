<?php

namespace Modules\Service\Http\Controllers\API\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Modules\Service\Models\Service;

class ServicesController extends Controller
{
    public function all(){
        return Service::all()->map(function ($service) {
            return collect($service)->only(['id', 'name']);
          });
    }
}
