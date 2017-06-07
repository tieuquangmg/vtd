<?php

namespace App\Repositories;

use App\Models\UserStatus;
use InfyOm\Generator\Common\BaseRepository;

class UserStatusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_status_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserStatus::class;
    }
}
