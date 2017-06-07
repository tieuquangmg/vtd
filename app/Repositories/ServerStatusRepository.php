<?php

namespace App\Repositories;

use App\Models\ServerStatus;
use InfyOm\Generator\Common\BaseRepository;

class ServerStatusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'server_status_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ServerStatus::class;
    }
}
