<?php

namespace App\Repositories;

use App\Models\AbsenceType;
use InfyOm\Generator\Common\BaseRepository;

class AbsenceTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'absence_type_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AbsenceType::class;
    }
}
