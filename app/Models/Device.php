<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Device
 * @package App\Models
 * @version May 23, 2017, 5:51 pm UTC
 */
class Device extends \Illuminate\Database\Eloquent\Model
{
    use SoftDeletes;

    public $table = 'device';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['date_buy','date_inventory','date_guarantee_end','deleted_at'];


    public $fillable = [
        'device_code',
        'device_name',
        'device_money',
        'user_id',
        'date_guarantee_end',
        'date_inventory',
        'date_buy',
        'device_status_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'device_code' => 'string',
        'device_name' => 'string',
        'device_money' => 'integer',
        'user_id' => 'integer',
        'device_status_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
	public function getFormattedDeviceMoney()
	{
		return number_format($this->attributes['device_money']);
	}
	public function getDateFomated($date){
		return $date->format('d/m/Y');
	}
    public function user(){
    	return $this->belongsTo(User::class,'user_id','id')->withTrashed();
    }
    public function status(){
    	return $this->belongsTo(DeviceStatus::class,'device_status_id','id');
    }

}
