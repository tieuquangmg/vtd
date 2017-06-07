<?php

namespace App\Repositories;

use App\Models\UserRank;
use InfyOm\Generator\Common\BaseRepository;

class UserRankRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_rank_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserRank::class;
    }
}
