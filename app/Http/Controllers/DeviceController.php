<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDeviceRequest;
use App\Http\Requests\UpdateDeviceRequest;
use App\Models\Device;
use App\Models\DeviceStatus;
use App\Models\User;
use App\Repositories\DeviceRepository;
use App\Http\Controllers\AppBaseController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Flash;
use Maatwebsite\Excel\Facades\Excel;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DeviceController extends AppBaseController
{
    /** @var  DeviceRepository */
    private $deviceRepository;

    public function __construct(DeviceRepository $deviceRepo)
    {
        $this->deviceRepository = $deviceRepo;
    }

    /**
     * Display a listing of the Device.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->deviceRepository->pushCriteria(new RequestCriteria($request));
        $devices = $this->deviceRepository->all();

        return view('devices.index')
            ->with('devices', $devices);
    }

    /**
     * Show the form for creating a new Device.
     *
     * @return Response
     */
    public function create()
    {
    	$data['userList'] = User::pluck('full_name','id');
    	$data['statuslist'] = DeviceStatus::pluck('device_status_name','id');
        return view('devices.create')->with($data);
    }

    /**
     * Store a newly created Device in storage.
     *
     * @param CreateDeviceRequest $request
     *
     * @return Response
     */
    public function store(CreateDeviceRequest $request)
    {
        $input = $request->all();
	    $input['date_inventory'] = Carbon::createFromFormat('d/m/Y',$input['date_inventory']);
	    $input['date_guarantee_end'] = Carbon::createFromFormat('d/m/Y',$input['date_guarantee_end']);
	    $input['date_buy'] = Carbon::createFromFormat('d/m/Y',$input['date_buy']);

        $device = $this->deviceRepository->create($input);

        Flash::success('Device saved successfully.');

        return redirect(route('devices.index'));
    }

    /**
     * Display the specified Device.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $device = $this->deviceRepository->findWithoutFail($id);

        if (empty($device)) {
            Flash::error('Device not found');

            return redirect(route('devices.index'));
        }

        return view('devices.show')->with('device', $device);
    }

    /**
     * Show the form for editing the specified Device.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $device = $this->deviceRepository->findWithoutFail($id);

        if (empty($device)) {
            Flash::error('Device not found');

            return redirect(route('devices.index'));
        }
	    $data['userList'] = User::pluck('full_name','id');
	    $data['statuslist'] = DeviceStatus::pluck('device_status_name','id');
        return view('devices.edit')->with('device', $device)->with($data);
    }

    /**
     * Update the specified Device in storage.
     *
     * @param  int              $id
     * @param UpdateDeviceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDeviceRequest $request)
    {
        $device = $this->deviceRepository->findWithoutFail($id);

        if (empty($device)) {
            Flash::error('Device not found');

            return redirect(route('devices.index'));
        }
        $input = $request->all();
	    $input['date_inventory'] = Carbon::createFromFormat('d/m/Y',$input['date_inventory']);
	    $input['date_guarantee_end'] = Carbon::createFromFormat('d/m/Y',$input['date_guarantee_end']);
	    $input['date_buy'] = Carbon::createFromFormat('d/m/Y',$input['date_buy']);
        $device = $this->deviceRepository->update($input, $id);

        Flash::success('Device updated successfully.');

        return redirect(route('devices.index'));
    }

    /**
     * Remove the specified Device from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $device = $this->deviceRepository->findWithoutFail($id);

        if (empty($device)) {
            Flash::error('Device not found');

            return redirect(route('devices.index'));
        }

        $this->deviceRepository->delete($id);

        Flash::success('Device deleted successfully.');

        return redirect(route('devices.index'));
    }

    public  function getExport(){
        $datas = Device::all();
        $fileName = "Danh sách thiết bị - ".Carbon::now()->format('d_m_Y_h_i_s');
        Excel::create($fileName, function($excel) use ($datas) {

            // Set the title
            $excel->setTitle('Danh sách thiết bị');

            // Chain the setters
            $excel->setCreator('Admin')
                ->setCompany('VTD');

            // Call them separately
            $excel->setDescription('A demonstration to change the file properties');
            $excel->sheet('Sheet1', function($sheet) use ($datas) {
                $sheet->cell('A1:Z1', function($row) {

                    // call cell manipulation methods
                    $row->setBackground('#00E4FF');

                });
                $sheet->fromModel($datas);
            });
        })->export('xlsx');
    }
}
