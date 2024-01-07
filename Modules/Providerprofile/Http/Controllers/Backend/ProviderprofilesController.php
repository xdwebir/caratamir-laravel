<?php

namespace Modules\Providerprofile\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ProviderprofilesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Providerprofiles';

        // module name
        $this->module_name = 'providerprofiles';

        // directory path of the module
        $this->module_path = 'providerprofile::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Providerprofile\Models\Providerprofile";
    }

}
