<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDeviceStatusRequest;
use App\Http\Requests\UpdateDeviceStatusRequest;
use App\Repositories\DeviceStatusRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DeviceStatusController extends AppBaseController
{
    /** @var  DeviceStatusRepository */
    private $deviceStatusRepository;

    public function __construct(DeviceStatusRepository $deviceStatusRepo)
    {
        $this->deviceStatusRepository = $deviceStatusRepo;
    }

    /**
     * Display a listing of the DeviceStatus.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->deviceStatusRepository->pushCriteria(new RequestCriteria($request));
        $deviceStatuses = $this->deviceStatusRepository->all();

        return view('device_statuses.index')
            ->with('deviceStatuses', $deviceStatuses);
    }

    /**
     * Show the form for creating a new DeviceStatus.
     *
     * @return Response
     */
    public function create()
    {
        return view('device_statuses.create');
    }

    /**
     * Store a newly created DeviceStatus in storage.
     *
     * @param CreateDeviceStatusRequest $request
     *
     * @return Response
     */
    public function store(CreateDeviceStatusRequest $request)
    {
        $input = $request->all();

        $deviceStatus = $this->deviceStatusRepository->create($input);

        Flash::success('Device Status saved successfully.');

        return redirect(route('deviceStatuses.index'));
    }

    /**
     * Display the specified DeviceStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $deviceStatus = $this->deviceStatusRepository->findWithoutFail($id);

        if (empty($deviceStatus)) {
            Flash::error('Device Status not found');

            return redirect(route('deviceStatuses.index'));
        }

        return view('device_statuses.show')->with('deviceStatus', $deviceStatus);
    }

    /**
     * Show the form for editing the specified DeviceStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $deviceStatus = $this->deviceStatusRepository->findWithoutFail($id);

        if (empty($deviceStatus)) {
            Flash::error('Device Status not found');

            return redirect(route('deviceStatuses.index'));
        }

        return view('device_statuses.edit')->with('deviceStatus', $deviceStatus);
    }

    /**
     * Update the specified DeviceStatus in storage.
     *
     * @param  int              $id
     * @param UpdateDeviceStatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDeviceStatusRequest $request)
    {
        $deviceStatus = $this->deviceStatusRepository->findWithoutFail($id);

        if (empty($deviceStatus)) {
            Flash::error('Device Status not found');

            return redirect(route('deviceStatuses.index'));
        }

        $deviceStatus = $this->deviceStatusRepository->update($request->all(), $id);

        Flash::success('Device Status updated successfully.');

        return redirect(route('deviceStatuses.index'));
    }

    /**
     * Remove the specified DeviceStatus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $deviceStatus = $this->deviceStatusRepository->findWithoutFail($id);

        if (empty($deviceStatus)) {
            Flash::error('Device Status not found');

            return redirect(route('deviceStatuses.index'));
        }

        $this->deviceStatusRepository->delete($id);

        Flash::success('Device Status deleted successfully.');

        return redirect(route('deviceStatuses.index'));
    }
}
