<?php

namespace App\Repositories;

use App\Models\Doccuments;
use InfyOm\Generator\Common\BaseRepository;

class DoccumentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'link',
        'serve'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Doccuments::class;
    }
}
