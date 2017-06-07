<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServerStatusRequest;
use App\Http\Requests\UpdateServerStatusRequest;
use App\Repositories\ServerStatusRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ServerStatusController extends AppBaseController
{
    /** @var  ServerStatusRepository */
    private $serverStatusRepository;

    public function __construct(ServerStatusRepository $serverStatusRepo)
    {
        $this->serverStatusRepository = $serverStatusRepo;
    }

    /**
     * Display a listing of the ServerStatus.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->serverStatusRepository->pushCriteria(new RequestCriteria($request));
        $serverStatuses = $this->serverStatusRepository->all();

        return view('server_statuses.index')
            ->with('serverStatuses', $serverStatuses);
    }

    /**
     * Show the form for creating a new ServerStatus.
     *
     * @return Response
     */
    public function create()
    {
        return view('server_statuses.create');
    }

    /**
     * Store a newly created ServerStatus in storage.
     *
     * @param CreateServerStatusRequest $request
     *
     * @return Response
     */
    public function store(CreateServerStatusRequest $request)
    {
        $input = $request->all();

        $serverStatus = $this->serverStatusRepository->create($input);

        Flash::success('Server Status saved successfully.');

        return redirect(route('serverStatuses.index'));
    }

    /**
     * Display the specified ServerStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $serverStatus = $this->serverStatusRepository->findWithoutFail($id);

        if (empty($serverStatus)) {
            Flash::error('Server Status not found');

            return redirect(route('serverStatuses.index'));
        }

        return view('server_statuses.show')->with('serverStatus', $serverStatus);
    }

    /**
     * Show the form for editing the specified ServerStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $serverStatus = $this->serverStatusRepository->findWithoutFail($id);

        if (empty($serverStatus)) {
            Flash::error('Server Status not found');

            return redirect(route('serverStatuses.index'));
        }

        return view('server_statuses.edit')->with('serverStatus', $serverStatus);
    }

    /**
     * Update the specified ServerStatus in storage.
     *
     * @param  int              $id
     * @param UpdateServerStatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServerStatusRequest $request)
    {
        $serverStatus = $this->serverStatusRepository->findWithoutFail($id);

        if (empty($serverStatus)) {
            Flash::error('Server Status not found');

            return redirect(route('serverStatuses.index'));
        }

        $serverStatus = $this->serverStatusRepository->update($request->all(), $id);

        Flash::success('Server Status updated successfully.');

        return redirect(route('serverStatuses.index'));
    }

    /**
     * Remove the specified ServerStatus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $serverStatus = $this->serverStatusRepository->findWithoutFail($id);

        if (empty($serverStatus)) {
            Flash::error('Server Status not found');

            return redirect(route('serverStatuses.index'));
        }

        $this->serverStatusRepository->delete($id);

        Flash::success('Server Status deleted successfully.');

        return redirect(route('serverStatuses.index'));
    }
}
