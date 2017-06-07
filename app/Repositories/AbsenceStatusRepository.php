<?php

namespace App\Repositories;

use App\Models\AbsenceStatus;
use InfyOm\Generator\Common\BaseRepository;

class AbsenceStatusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'absence_status_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AbsenceStatus::class;
    }
}
