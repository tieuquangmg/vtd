<?php

namespace App\Repositories;

use App\Models\User_email;
use InfyOm\Generator\Common\BaseRepository;

class User_emailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'email_to_user_id',
        'content',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User_email::class;
    }
}
