<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Artesaos\Defender\Traits\HasDefender;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * Class User
 * @package App\Models
 * @version May 24, 2017, 10:13 am UTC
 */
class User extends Authenticatable
{
    use SoftDeletes,HasDefender;

    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['start_date','birthday', 'deleted_at', 'contract_date_end'];

    public $fillable = [
        'full_name',
        'name',
        'password',
        'email',
        'sdt',
        'start_date',
        'user_employee_type_id',
        'user_rank_id',
        'user_status_id',
        'contract_date_end',
        'contract_file',
        'address',
        'permanent_address',
        'birthday',
        'card_id',
        'card_date',
        'card_location',
        'bank_id',
        'bank_acc',
        'bank_location',
        'salary',
        'bike_no',
        'deleted_at'

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'full_name' => 'string',
        'name' => 'string',
        'password' => 'string',
        'email' => 'string',
        'sdt' => 'string',
        'user_employee_type_id' => 'integer',
        'user_rank_id' => 'integer',
        'user_status_id' => 'integer',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'full_name' => 'required|max:20',
        'name' => 'required|unique:users|max:20',
        'password' => 'required|min:6',
        'email' => 'required|email|unique:users',
        'sdt' => '',
        'start_date' => 'required',
        'user_employee_type_id' => 'required',
        'user_rank_id' => 'required',
        'user_status_id' => 'required',
        'bank_acc' => '',
        'contract_date_end' => '',
        'contract_file' => '',
        'address' => '',
        'permanent_address' => '',


        'roles'=>'required'
    ];
    public static $rules_update = [
        'full_name' => 'required',
//        'name' => 'required|unique:users',
//        'password' => 'min:6',
        'email' => 'required',
        'sdt' => '',
        'start_date' => 'required',
        'user_employee_type_id' => 'required',
        'user_rank_id' => 'required',
        'user_status_id' => 'required',
        'bank_acc' => '',
        'contract_date_end' => '',
        'contract_file' => ''
    ];

    public function employee()
    {
        return $this->hasOne(UserEmployeeType::class, 'id', 'user_employee_type_id');
    }

    public function rank()
    {
        return $this->hasOne(UserRank::class, 'id', 'user_rank_id');
    }

    public function status()
    {
        return $this->hasOne(UserStatus::class, 'id', 'user_status_id');
    }

    public function userLeaver()
    {
        return $this->hasMany(UserLeave::class, 'user_id', 'id');
    }

    public function getCountById($year_id)
    {
	    $absence = Absence::where('user_id', $this->id)->get();
        $data = ['total' => 0, 'take' => 0, 'balance' => 0];
        foreach ($absence as $item) {
        	if($item->absence_status_id == 1 || $item->absence_status_id == 2){
		        $data['take'] += $item->days;
	        }
        }
	    $absence_type = AbsenceType::all()->pluck('id')->toArray();
	    $userLeaves = UserLeave::where('user_id', $this->id)
		    ->where('year_id',$year_id)
		    ->whereIn('absence_type_id',$absence_type)
		    ->get();
	    foreach ($userLeaves as $row){
		    $data['total'] += $row->total_leave;
	    }
	    $data['balance'] = $data['total'] - $data['take'];
        return $data;
    }
}
