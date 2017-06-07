<?php

namespace App\Repositories;

use App\Models\UserEmployeeType;
use InfyOm\Generator\Common\BaseRepository;

class UserEmployeeTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_employee_type_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserEmployeeType::class;
    }
}
