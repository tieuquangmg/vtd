<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserEmployeeTypeRequest;
use App\Http\Requests\UpdateUserEmployeeTypeRequest;
use App\Repositories\UserEmployeeTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserEmployeeTypeController extends AppBaseController
{
    /** @var  UserEmployeeTypeRepository */
    private $userEmployeeTypeRepository;

    public function __construct(UserEmployeeTypeRepository $userEmployeeTypeRepo)
    {
        $this->userEmployeeTypeRepository = $userEmployeeTypeRepo;
    }

    /**
     * Display a listing of the UserEmployeeType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userEmployeeTypeRepository->pushCriteria(new RequestCriteria($request));
        $userEmployeeTypes = $this->userEmployeeTypeRepository->all();

        return view('user_employee_types.index')
            ->with('userEmployeeTypes', $userEmployeeTypes);
    }

    /**
     * Show the form for creating a new UserEmployeeType.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_employee_types.create');
    }

    /**
     * Store a newly created UserEmployeeType in storage.
     *
     * @param CreateUserEmployeeTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateUserEmployeeTypeRequest $request)
    {
        $input = $request->all();

        $userEmployeeType = $this->userEmployeeTypeRepository->create($input);

        Flash::success('User Employee Type saved successfully.');

        return redirect(route('userEmployeeTypes.index'));
    }

    /**
     * Display the specified UserEmployeeType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userEmployeeType = $this->userEmployeeTypeRepository->findWithoutFail($id);

        if (empty($userEmployeeType)) {
            Flash::error('User Employee Type not found');

            return redirect(route('userEmployeeTypes.index'));
        }

        return view('user_employee_types.show')->with('userEmployeeType', $userEmployeeType);
    }

    /**
     * Show the form for editing the specified UserEmployeeType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userEmployeeType = $this->userEmployeeTypeRepository->findWithoutFail($id);

        if (empty($userEmployeeType)) {
            Flash::error('User Employee Type not found');

            return redirect(route('userEmployeeTypes.index'));
        }

        return view('user_employee_types.edit')->with('userEmployeeType', $userEmployeeType);
    }

    /**
     * Update the specified UserEmployeeType in storage.
     *
     * @param  int              $id
     * @param UpdateUserEmployeeTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserEmployeeTypeRequest $request)
    {
        $userEmployeeType = $this->userEmployeeTypeRepository->findWithoutFail($id);

        if (empty($userEmployeeType)) {
            Flash::error('User Employee Type not found');

            return redirect(route('userEmployeeTypes.index'));
        }

        $userEmployeeType = $this->userEmployeeTypeRepository->update($request->all(), $id);

        Flash::success('User Employee Type updated successfully.');

        return redirect(route('userEmployeeTypes.index'));
    }

    /**
     * Remove the specified UserEmployeeType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userEmployeeType = $this->userEmployeeTypeRepository->findWithoutFail($id);

        if (empty($userEmployeeType)) {
            Flash::error('User Employee Type not found');

            return redirect(route('userEmployeeTypes.index'));
        }

        $this->userEmployeeTypeRepository->delete($id);

        Flash::success('User Employee Type deleted successfully.');

        return redirect(route('userEmployeeTypes.index'));
    }
}
