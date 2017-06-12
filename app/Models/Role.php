<?php

namespace App\Models;

use Artesaos\Defender\Permission;
use Eloquent as Model;
use Artesaos\Defender\Contracts\Role as RoleInterface;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Role
 * @package App\Models
 * @version June 11, 2017, 6:47 pm ICT
 */
class Role  extends Model implements RoleInterface
{
	use \Artesaos\Defender\Traits\Models\Role;
    //use SoftDeletes;

    public $table = 'roles';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


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

	public function users()
	{
	}
//	public function hasPermission($permission, $force = false)
//	{
//		$all = Permission::all()->pluck('name')->toArray();
//		return in_array($permission,$all);
//	}
//	public function syncPermissions(array $permission)
//	{
//		return $this->permissions()->sync($permission);
//	}
}
