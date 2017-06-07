<?php

namespace App\Models;

//use Eloquent as Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Absence
 * @package App\Models
 * @version May 27, 2017, 4:25 pm UTC
 */
class Absence extends Model
{
    use SoftDeletes;

    public $table = 'absence';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['start_date','deleted_at'];


    public $fillable = [
        'user_id',
        'start_date',
        'days',
        'user_approval_id',
        'absence_status_id',
        'user_note',
        'approval_note'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
	    'id' => 'integer',
        'user_id' => 'integer',
        'start_date' => 'date',
        'days' => 'integer',
        'user_approval_id' => 'integer',
        'absence_status_id' => 'string',
        'user_note' => 'string',
        'approval_note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    public function user_approval(){
    	return $this->belongsTo(User::class,'user_approval_id','id');
    }

    public function user(){
    	return $this->belongsTo(User::class,'user_id','id');
    }
    public function status(){
    	return $this->belongsTo(AbsenceStatus::class,'absence_status_id','id');
    }

    
}
