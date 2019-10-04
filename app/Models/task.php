<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class task
 * @package App\Models
 * @version October 2, 2019, 9:41 pm UTC
 *
 * @property string name
 * @property string desc
 * @property integer parent_id
 * @property integer user_id
 */
class task extends Model
{

    public $table = 'tasks';
    


    public $fillable = [
        'name',
        'desc',
        'parent_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'parent_id' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
