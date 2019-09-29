<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Post
 * @package App\Models
 * @version September 29, 2019, 9:35 am UTC
 *
 * @property string title
 * @property string body
 */
class Post extends Model
{

    public $table = 'posts';
    


    public $fillable = [
        'title',
        'body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
