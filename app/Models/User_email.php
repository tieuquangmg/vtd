<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User_email
 * @package App\Models
 * @version June 16, 2017, 12:17 pm ICT
 */
class User_email extends \Illuminate\Database\Eloquent\Model
{
//    use SoftDeletes;

    public $table = 'user_email';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'email_to_user_id',
        'content',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'email_to_user_id' => 'integer',
        'content' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function email_to_user(){
        return $this->belongsToMany(User::class,'email_to_user','email_id','user_id')
            ->withPivot('status');
    }
}
