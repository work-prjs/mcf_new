<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Cat
 * @package App\Models
 * @version September 29, 2019, 9:48 am UTC
 *
 * @property string name
 */
class Cat extends Model
{

    public $table = 'cats';
    


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
