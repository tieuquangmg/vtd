<?php

namespace App\Repositories;

use App\Models\Server;
use InfyOm\Generator\Common\BaseRepository;

class ServerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'server_name',
        'server_first_link',
        'server_second_link',
        'server_ip',
        'server_expire_day',
        'server_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Server::class;
    }
}
