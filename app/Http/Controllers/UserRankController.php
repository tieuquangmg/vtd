<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRankRequest;
use App\Http\Requests\UpdateUserRankRequest;
use App\Repositories\UserRankRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserRankController extends AppBaseController
{
    /** @var  UserRankRepository */
    private $userRankRepository;

    public function __construct(UserRankRepository $userRankRepo)
    {
        $this->userRankRepository = $userRankRepo;
    }

    /**
     * Display a listing of the UserRank.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userRankRepository->pushCriteria(new RequestCriteria($request));
        $userRanks = $this->userRankRepository->all();

        return view('user_ranks.index')
            ->with('userRanks', $userRanks);
    }

    /**
     * Show the form for creating a new UserRank.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_ranks.create');
    }

    /**
     * Store a newly created UserRank in storage.
     *
     * @param CreateUserRankRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRankRequest $request)
    {
        $input = $request->all();

        $userRank = $this->userRankRepository->create($input);

        Flash::success('User Rank saved successfully.');

        return redirect(route('userRanks.index'));
    }

    /**
     * Display the specified UserRank.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userRank = $this->userRankRepository->findWithoutFail($id);

        if (empty($userRank)) {
            Flash::error('User Rank not found');

            return redirect(route('userRanks.index'));
        }

        return view('user_ranks.show')->with('userRank', $userRank);
    }

    /**
     * Show the form for editing the specified UserRank.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userRank = $this->userRankRepository->findWithoutFail($id);

        if (empty($userRank)) {
            Flash::error('User Rank not found');

            return redirect(route('userRanks.index'));
        }

        return view('user_ranks.edit')->with('userRank', $userRank);
    }

    /**
     * Update the specified UserRank in storage.
     *
     * @param  int              $id
     * @param UpdateUserRankRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRankRequest $request)
    {
        $userRank = $this->userRankRepository->findWithoutFail($id);

        if (empty($userRank)) {
            Flash::error('User Rank not found');

            return redirect(route('userRanks.index'));
        }

        $userRank = $this->userRankRepository->update($request->all(), $id);

        Flash::success('User Rank updated successfully.');

        return redirect(route('userRanks.index'));
    }

    /**
     * Remove the specified UserRank from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userRank = $this->userRankRepository->findWithoutFail($id);

        if (empty($userRank)) {
            Flash::error('User Rank not found');

            return redirect(route('userRanks.index'));
        }

        $this->userRankRepository->delete($id);

        Flash::success('User Rank deleted successfully.');

        return redirect(route('userRanks.index'));
    }
}
