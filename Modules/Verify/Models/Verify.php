<?php

namespace Modules\Verify\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Verify extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'verifies';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Verify\database\factories\VerifyFactory::new();
    }
}
