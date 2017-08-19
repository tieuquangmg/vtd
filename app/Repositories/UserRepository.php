<?php

namespace App\Repositories;

use App\Models\User;
use InfyOm\Generator\Common\BaseRepository;

class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'full_name',
        'name',
        'email',
        'sdt',
        'start_date',
        'user_employee_type_id',
        'user_rank_id',
        'user_status_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }
}
