<?php

namespace App\Repositories;

use App\Models\Absence;
use InfyOm\Generator\Common\BaseRepository;

class AbsenceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'start_date',
        'days',
        'user_approval_id',
        'absence_status_id',
        'user_note',
        'approval_note'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Absence::class;
    }
}
