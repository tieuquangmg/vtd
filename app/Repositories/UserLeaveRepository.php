<?php

namespace App\Repositories;

use App\Models\UserLeave;
use InfyOm\Generator\Common\BaseRepository;

class UserLeaveRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'absence_type_id',
        'year_id',
        'total_leave',
        'taken_leave',
        'balance_leave'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserLeave::class;
    }

}
