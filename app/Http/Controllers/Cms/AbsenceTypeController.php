<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAbsenceTypeRequest;
use App\Http\Requests\UpdateAbsenceTypeRequest;
use App\Repositories\AbsenceTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AbsenceTypeController extends AppBaseController
{
    /** @var  AbsenceTypeRepository */
    private $absenceTypeRepository;

    public function __construct(AbsenceTypeRepository $absenceTypeRepo)
    {
        $this->absenceTypeRepository = $absenceTypeRepo;
    }

    /**
     * Display a listing of the AbsenceType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->absenceTypeRepository->pushCriteria(new RequestCriteria($request));
        $absenceTypes = $this->absenceTypeRepository->all();
        return view('absence_types.index')->with('absenceTypes', $absenceTypes);
    }

    /**
     * Show the form for creating a new AbsenceType.
     *
     * @return Response
     */
    public function create()
    {
        return view('absence_types.create');
    }

    /**
     * Store a newly created AbsenceType in storage.
     *
     * @param CreateAbsenceTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateAbsenceTypeRequest $request)
    {
        $input = $request->all();

        $absenceType = $this->absenceTypeRepository->create($input);

        Flash::success('Absence Type saved successfully.');

        return redirect(route('absenceTypes.index'));
    }

    /**
     * Display the specified AbsenceType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $absenceType = $this->absenceTypeRepository->findWithoutFail($id);

        if (empty($absenceType)) {
            Flash::error('Absence Type not found');

            return redirect(route('absenceTypes.index'));
        }

        return view('absence_types.show')->with('absenceType', $absenceType);
    }

    /**
     * Show the form for editing the specified AbsenceType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $absenceType = $this->absenceTypeRepository->findWithoutFail($id);

        if (empty($absenceType)) {
            Flash::error('Absence Type not found');

            return redirect(route('absenceTypes.index'));
        }

        return view('absence_types.edit')->with('absenceType', $absenceType);
    }

    /**
     * Update the specified AbsenceType in storage.
     *
     * @param  int              $id
     * @param UpdateAbsenceTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAbsenceTypeRequest $request)
    {
        $absenceType = $this->absenceTypeRepository->findWithoutFail($id);

        if (empty($absenceType)) {
            Flash::error('Absence Type not found');

            return redirect(route('absenceTypes.index'));
        }

        $absenceType = $this->absenceTypeRepository->update($request->all(), $id);

        Flash::success('Absence Type updated successfully.');

        return redirect(route('absenceTypes.index'));
    }

    /**
     * Remove the specified AbsenceType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $absenceType = $this->absenceTypeRepository->findWithoutFail($id);

        if (empty($absenceType)) {
            Flash::error('Absence Type not found');

            return redirect(route('absenceTypes.index'));
        }

        $this->absenceTypeRepository->delete($id);

        Flash::success('Absence Type deleted successfully.');

        return redirect(route('absenceTypes.index'));
    }
}
