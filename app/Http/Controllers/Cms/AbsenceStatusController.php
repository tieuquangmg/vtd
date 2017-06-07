<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAbsenceStatusRequest;
use App\Http\Requests\UpdateAbsenceStatusRequest;
use App\Repositories\AbsenceStatusRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AbsenceStatusController extends AppBaseController
{
    /** @var  AbsenceStatusRepository */
    private $absenceStatusRepository;

    public function __construct(AbsenceStatusRepository $absenceStatusRepo)
    {
        $this->absenceStatusRepository = $absenceStatusRepo;
    }

    /**
     * Display a listing of the AbsenceStatus.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->absenceStatusRepository->pushCriteria(new RequestCriteria($request));
        $absenceStatuses = $this->absenceStatusRepository->all();

        return view('absence_statuses.index')
            ->with('absenceStatuses', $absenceStatuses);
    }

    /**
     * Show the form for creating a new AbsenceStatus.
     *
     * @return Response
     */
    public function create()
    {
        return view('absence_statuses.create');
    }

    /**
     * Store a newly created AbsenceStatus in storage.
     *
     * @param CreateAbsenceStatusRequest $request
     *
     * @return Response
     */
    public function store(CreateAbsenceStatusRequest $request)
    {
        $input = $request->all();

        $absenceStatus = $this->absenceStatusRepository->create($input);

        Flash::success('Absence Status saved successfully.');

        return redirect(route('absenceStatuses.index'));
    }

    /**
     * Display the specified AbsenceStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $absenceStatus = $this->absenceStatusRepository->findWithoutFail($id);

        if (empty($absenceStatus)) {
            Flash::error('Absence Status not found');

            return redirect(route('absenceStatuses.index'));
        }

        return view('absence_statuses.show')->with('absenceStatus', $absenceStatus);
    }

    /**
     * Show the form for editing the specified AbsenceStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $absenceStatus = $this->absenceStatusRepository->findWithoutFail($id);

        if (empty($absenceStatus)) {
            Flash::error('Absence Status not found');

            return redirect(route('absenceStatuses.index'));
        }

        return view('absence_statuses.edit')->with('absenceStatus', $absenceStatus);
    }

    /**
     * Update the specified AbsenceStatus in storage.
     *
     * @param  int              $id
     * @param UpdateAbsenceStatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAbsenceStatusRequest $request)
    {
        $absenceStatus = $this->absenceStatusRepository->findWithoutFail($id);

        if (empty($absenceStatus)) {
            Flash::error('Absence Status not found');

            return redirect(route('absenceStatuses.index'));
        }

        $absenceStatus = $this->absenceStatusRepository->update($request->all(), $id);

        Flash::success('Absence Status updated successfully.');

        return redirect(route('absenceStatuses.index'));
    }

    /**
     * Remove the specified AbsenceStatus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $absenceStatus = $this->absenceStatusRepository->findWithoutFail($id);

        if (empty($absenceStatus)) {
            Flash::error('Absence Status not found');

            return redirect(route('absenceStatuses.index'));
        }

        $this->absenceStatusRepository->delete($id);

        Flash::success('Absence Status deleted successfully.');

        return redirect(route('absenceStatuses.index'));
    }
}
