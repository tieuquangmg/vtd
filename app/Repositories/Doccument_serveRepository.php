<?php

namespace App\Repositories;

use App\Models\Doccument_serve;
use InfyOm\Generator\Common\BaseRepository;

class Doccument_serveRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Doccument_serve::class;
    }
}
