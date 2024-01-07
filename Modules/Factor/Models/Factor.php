<?php

namespace Modules\Factor\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Factor extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'factors';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Factor\database\factories\FactorFactory::new();
    }
}
