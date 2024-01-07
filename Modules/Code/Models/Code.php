<?php

namespace Modules\Code\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Code extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'codes';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Code\database\factories\CodeFactory::new();
    }
}
