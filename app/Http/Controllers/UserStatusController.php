<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserStatusRequest;
use App\Http\Requests\UpdateUserStatusRequest;
use App\Repositories\UserStatusRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserStatusController extends AppBaseController
{
    /** @var  UserStatusRepository */
    private $userStatusRepository;

    public function __construct(UserStatusRepository $userStatusRepo)
    {
        $this->userStatusRepository = $userStatusRepo;
    }

    /**
     * Display a listing of the UserStatus.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userStatusRepository->pushCriteria(new RequestCriteria($request));
        $userStatuses = $this->userStatusRepository->all();

        return view('user_statuses.index')
            ->with('userStatuses', $userStatuses);
    }

    /**
     * Show the form for creating a new UserStatus.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_statuses.create');
    }

    /**
     * Store a newly created UserStatus in storage.
     *
     * @param CreateUserStatusRequest $request
     *
     * @return Response
     */
    public function store(CreateUserStatusRequest $request)
    {
        $input = $request->all();

        $userStatus = $this->userStatusRepository->create($input);

        Flash::success('User Status saved successfully.');

        return redirect(route('userStatuses.index'));
    }

    /**
     * Display the specified UserStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userStatus = $this->userStatusRepository->findWithoutFail($id);

        if (empty($userStatus)) {
            Flash::error('User Status not found');

            return redirect(route('userStatuses.index'));
        }

        return view('user_statuses.show')->with('userStatus', $userStatus);
    }

    /**
     * Show the form for editing the specified UserStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userStatus = $this->userStatusRepository->findWithoutFail($id);

        if (empty($userStatus)) {
            Flash::error('User Status not found');

            return redirect(route('userStatuses.index'));
        }

        return view('user_statuses.edit')->with('userStatus', $userStatus);
    }

    /**
     * Update the specified UserStatus in storage.
     *
     * @param  int              $id
     * @param UpdateUserStatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserStatusRequest $request)
    {
        $userStatus = $this->userStatusRepository->findWithoutFail($id);

        if (empty($userStatus)) {
            Flash::error('User Status not found');

            return redirect(route('userStatuses.index'));
        }

        $userStatus = $this->userStatusRepository->update($request->all(), $id);

        Flash::success('User Status updated successfully.');

        return redirect(route('userStatuses.index'));
    }

    /**
     * Remove the specified UserStatus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userStatus = $this->userStatusRepository->findWithoutFail($id);

        if (empty($userStatus)) {
            Flash::error('User Status not found');

            return redirect(route('userStatuses.index'));
        }

        $this->userStatusRepository->delete($id);

        Flash::success('User Status deleted successfully.');

        return redirect(route('userStatuses.index'));
    }
}
