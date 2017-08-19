<?php

namespace App\Criteria;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class MyCriteria
 * @package namespace App\Criteria;
 */
class MyCriteria implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
	protected $request;

	public function __construct(Request $request)
    {
		$this->request = $request;
    }

	public function apply($model, RepositoryInterface $repository)
    {
	    $model = $model->where('user_id','=', Auth::user()->id );
        return $model;
    }
}