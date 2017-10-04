<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Artesaos\Defender\Traits\HasDefender;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,HasDefender;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
	protected $dates = ['start_date'];


	/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	public function generateToken()
	{
		$this->api_token = str_random(60);
		$this->save();
		return $this->api_token;
	}
}
