<?php

namespace App\Models;

use Carbon\Carbon;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserLeave
 * @package App\Models
 * @version May 27, 2017, 5:08 pm UTC
 */
class UserLeave extends \Illuminate\Database\Eloquent\Model
{
    //use SoftDeletes;

    public $table = 'user_leave';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'absence_type_id',
        'year_id',
        'total_leave',
        'taken_leave',
        'balance_leave'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'absence_type_id' => 'integer',
        'year_id' => 'integer',
        'total_leave' => 'integer',
        'taken_leave' => 'integer',
        'balance_leave' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    public function year(){
    	return $this->belongsTo(Year::class,'year_id','id');
    }
    public function absencetype(){
    	return $this->belongsTo(AbsenceType::class,'absence_type_id','id');
    }
    public function user(){
    	return $this->belongsTo(User::class,'user_id','id');
    }
    public function gettaked(){
        $taked = Absence::where('absence_type_id',$this->absence_type_id)
                        ->where('user_id',$this->user_id)
                        ->whereYear('start_date',Carbon::now()->year)
                        ->whereIn('absence_status_id',[1,2])
                        ->get();
        return count($taked);
    }
}
