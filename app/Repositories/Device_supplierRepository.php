<?php

namespace App\Repositories;

use App\Models\Device_supplier;
use InfyOm\Generator\Common\BaseRepository;

class Device_supplierRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'sdt'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Device_supplier::class;
    }
}
