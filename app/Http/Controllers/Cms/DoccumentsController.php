<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDoccumentsRequest;
use App\Http\Requests\UpdateDoccumentsRequest;
use App\Repositories\DoccumentsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DoccumentsController extends AppBaseController
{
    /** @var  DoccumentsRepository */
    private $doccumentsRepository;

    public function __construct(DoccumentsRepository $doccumentsRepo)
    {
        $this->doccumentsRepository = $doccumentsRepo;
    }

    /**
     * Display a listing of the Doccuments.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->doccumentsRepository->pushCriteria(new RequestCriteria($request));
        $doccuments = $this->doccumentsRepository->all();

        return view('doccuments.index')
            ->with('doccuments', $doccuments);
    }

    /**
     * Show the form for creating a new Doccuments.
     *
     * @return Response
     */
    public function create()
    {
        return view('doccuments.create');
    }

    /**
     * Store a newly created Doccuments in storage.
     *
     * @param CreateDoccumentsRequest $request
     *
     * @return Response
     */
    public function store(CreateDoccumentsRequest $request)
    {
        $input = $request->all();

        $doccuments = $this->doccumentsRepository->create($input);

        Flash::success('Doccuments saved successfully.');

        return redirect(route('doccuments.index'));
    }

    /**
     * Display the specified Doccuments.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $doccuments = $this->doccumentsRepository->findWithoutFail($id);

        if (empty($doccuments)) {
            Flash::error('Doccuments not found');

            return redirect(route('doccuments.index'));
        }

        return view('doccuments.show')->with('doccuments', $doccuments);
    }

    /**
     * Show the form for editing the specified Doccuments.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $doccuments = $this->doccumentsRepository->findWithoutFail($id);

        if (empty($doccuments)) {
            Flash::error('Doccuments not found');

            return redirect(route('doccuments.index'));
        }

        return view('doccuments.edit')->with('doccuments', $doccuments);
    }

    /**
     * Update the specified Doccuments in storage.
     *
     * @param  int              $id
     * @param UpdateDoccumentsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDoccumentsRequest $request)
    {
        $doccuments = $this->doccumentsRepository->findWithoutFail($id);

        if (empty($doccuments)) {
            Flash::error('Doccuments not found');

            return redirect(route('doccuments.index'));
        }

        $doccuments = $this->doccumentsRepository->update($request->all(), $id);

        Flash::success('Doccuments updated successfully.');

        return redirect(route('doccuments.index'));
    }

    /**
     * Remove the specified Doccuments from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $doccuments = $this->doccumentsRepository->findWithoutFail($id);

        if (empty($doccuments)) {
            Flash::error('Doccuments not found');

            return redirect(route('doccuments.index'));
        }

        $this->doccumentsRepository->delete($id);

        Flash::success('Doccuments deleted successfully.');

        return redirect(route('doccuments.index'));
    }
}
