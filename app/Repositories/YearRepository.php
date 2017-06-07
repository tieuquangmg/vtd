<?php

namespace App\Repositories;

use App\Models\Year;
use InfyOm\Generator\Common\BaseRepository;

class YearRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'year_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Year::class;
    }
}
