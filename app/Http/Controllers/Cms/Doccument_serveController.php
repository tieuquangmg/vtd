<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDoccument_serveRequest;
use App\Http\Requests\UpdateDoccument_serveRequest;
use App\Repositories\Doccument_serveRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Doccument_serveController extends AppBaseController
{
    /** @var  Doccument_serveRepository */
    private $doccumentServeRepository;

    public function __construct(Doccument_serveRepository $doccumentServeRepo)
    {
        $this->doccumentServeRepository = $doccumentServeRepo;
    }

    /**
     * Display a listing of the Doccument_serve.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->doccumentServeRepository->pushCriteria(new RequestCriteria($request));
        $doccumentServes = $this->doccumentServeRepository->all();

        return view('doccument_serves.index')
            ->with('doccumentServes', $doccumentServes);
    }

    /**
     * Show the form for creating a new Doccument_serve.
     *
     * @return Response
     */
    public function create()
    {
        return view('doccument_serves.create');
    }

    /**
     * Store a newly created Doccument_serve in storage.
     *
     * @param CreateDoccument_serveRequest $request
     *
     * @return Response
     */
    public function store(CreateDoccument_serveRequest $request)
    {
        $input = $request->all();

        $doccumentServe = $this->doccumentServeRepository->create($input);

        Flash::success('Doccument Serve saved successfully.');

        return redirect(route('doccumentServes.index'));
    }

    /**
     * Display the specified Doccument_serve.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $doccumentServe = $this->doccumentServeRepository->findWithoutFail($id);

        if (empty($doccumentServe)) {
            Flash::error('Doccument Serve not found');

            return redirect(route('doccumentServes.index'));
        }

        return view('doccument_serves.show')->with('doccumentServe', $doccumentServe);
    }

    /**
     * Show the form for editing the specified Doccument_serve.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $doccumentServe = $this->doccumentServeRepository->findWithoutFail($id);

        if (empty($doccumentServe)) {
            Flash::error('Doccument Serve not found');

            return redirect(route('doccumentServes.index'));
        }

        return view('doccument_serves.edit')->with('doccumentServe', $doccumentServe);
    }

    /**
     * Update the specified Doccument_serve in storage.
     *
     * @param  int              $id
     * @param UpdateDoccument_serveRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDoccument_serveRequest $request)
    {
        $doccumentServe = $this->doccumentServeRepository->findWithoutFail($id);

        if (empty($doccumentServe)) {
            Flash::error('Doccument Serve not found');

            return redirect(route('doccumentServes.index'));
        }

        $doccumentServe = $this->doccumentServeRepository->update($request->all(), $id);

        Flash::success('Doccument Serve updated successfully.');

        return redirect(route('doccumentServes.index'));
    }

    /**
     * Remove the specified Doccument_serve from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $doccumentServe = $this->doccumentServeRepository->findWithoutFail($id);

        if (empty($doccumentServe)) {
            Flash::error('Doccument Serve not found');

            return redirect(route('doccumentServes.index'));
        }

        $this->doccumentServeRepository->delete($id);

        Flash::success('Doccument Serve deleted successfully.');

        return redirect(route('doccumentServes.index'));
    }
}
