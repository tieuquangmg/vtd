<?php

namespace App\Repositories;

use App\Models\DeviceStatus;
use InfyOm\Generator\Common\BaseRepository;

class DeviceStatusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'device_status_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DeviceStatus::class;
    }
}
