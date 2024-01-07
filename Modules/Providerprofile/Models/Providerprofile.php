<?php

namespace Modules\Providerprofile\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Providerprofile extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'providerprofiles';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Providerprofile\database\factories\ProviderprofileFactory::new();
    }
}
