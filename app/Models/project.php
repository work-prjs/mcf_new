<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class project
 * @package App\Models
 * @version October 2, 2019, 9:36 pm UTC
 *
 * @property string name
 * @property integer parent_id
 * @property string desc
 */
class project extends Model
{

    public $table = 'projects';
    


    public $fillable = [
        'name',
        'parent_id',
        'desc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'parent_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
