<?php

namespace App\Models;

use Artesaos\Defender\Permission;
use Illuminate\Database\Eloquent\Model;

class Permission_group extends Model
{
    protected $table = 'permission_group';

    public function permissions(){
        return $this->hasMany(Permission::class,'group_id','id');
    }
}