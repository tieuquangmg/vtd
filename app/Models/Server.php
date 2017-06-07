<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Server
 * @package App\Models
 * @version May 23, 2017, 5:55 pm UTC
 */
class Server extends Model
{
    use SoftDeletes;

    public $table = 'server';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'server_name',
        'server_first_link',
        'server_second_link',
        'server_ip',
        'server_expire_day',
        'server_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'server_name' => 'string',
        'server_first_link' => 'string',
        'server_second_link' => 'string',
        'server_ip' => 'string',
        'server_expire_day' => 'string',
        'server_status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
