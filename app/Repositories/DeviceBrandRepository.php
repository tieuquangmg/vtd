<?php

namespace App\Repositories;

use App\Models\DeviceBrand;
use InfyOm\Generator\Common\BaseRepository;

class DeviceBrandRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'device_brand_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DeviceBrand::class;
    }
}
