<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDevice_supplierRequest;
use App\Http\Requests\UpdateDevice_supplierRequest;
use App\Repositories\Device_supplierRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Device_supplierController extends AppBaseController
{
    /** @var  Device_supplierRepository */
    private $deviceSupplierRepository;

    public function __construct(Device_supplierRepository $deviceSupplierRepo)
    {
        $this->deviceSupplierRepository = $deviceSupplierRepo;
    }

    /**
     * Display a listing of the Device_supplier.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->deviceSupplierRepository->pushCriteria(new RequestCriteria($request));
        $deviceSuppliers = $this->deviceSupplierRepository->all();

        return view('device_suppliers.index')
            ->with('deviceSuppliers', $deviceSuppliers);
    }

    /**
     * Show the form for creating a new Device_supplier.
     *
     * @return Response
     */
    public function create()
    {
        return view('device_suppliers.create');
    }

    /**
     * Store a newly created Device_supplier in storage.
     *
     * @param CreateDevice_supplierRequest $request
     *
     * @return Response
     */
    public function store(CreateDevice_supplierRequest $request)
    {
        $input = $request->all();

        $deviceSupplier = $this->deviceSupplierRepository->create($input);

        Flash::success('Device Supplier saved successfully.');

        return redirect(route('deviceSuppliers.index'));
    }

    /**
     * Display the specified Device_supplier.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $deviceSupplier = $this->deviceSupplierRepository->findWithoutFail($id);

        if (empty($deviceSupplier)) {
            Flash::error('Device Supplier not found');

            return redirect(route('deviceSuppliers.index'));
        }

        return view('device_suppliers.show')->with('deviceSupplier', $deviceSupplier);
    }

    /**
     * Show the form for editing the specified Device_supplier.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $deviceSupplier = $this->deviceSupplierRepository->findWithoutFail($id);

        if (empty($deviceSupplier)) {
            Flash::error('Device Supplier not found');

            return redirect(route('deviceSuppliers.index'));
        }

        return view('device_suppliers.edit')->with('deviceSupplier', $deviceSupplier);
    }

    /**
     * Update the specified Device_supplier in storage.
     *
     * @param  int              $id
     * @param UpdateDevice_supplierRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDevice_supplierRequest $request)
    {
        $deviceSupplier = $this->deviceSupplierRepository->findWithoutFail($id);

        if (empty($deviceSupplier)) {
            Flash::error('Device Supplier not found');

            return redirect(route('deviceSuppliers.index'));
        }

        $deviceSupplier = $this->deviceSupplierRepository->update($request->all(), $id);

        Flash::success('Device Supplier updated successfully.');

        return redirect(route('deviceSuppliers.index'));
    }

    /**
     * Remove the specified Device_supplier from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $deviceSupplier = $this->deviceSupplierRepository->findWithoutFail($id);

        if (empty($deviceSupplier)) {
            Flash::error('Device Supplier not found');

            return redirect(route('deviceSuppliers.index'));
        }

        $this->deviceSupplierRepository->delete($id);

        Flash::success('Device Supplier deleted successfully.');

        return redirect(route('deviceSuppliers.index'));
    }
}
