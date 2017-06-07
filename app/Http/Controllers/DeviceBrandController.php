<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDeviceBrandRequest;
use App\Http\Requests\UpdateDeviceBrandRequest;
use App\Repositories\DeviceBrandRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DeviceBrandController extends AppBaseController
{
    /** @var  DeviceBrandRepository */
    private $deviceBrandRepository;

    public function __construct(DeviceBrandRepository $deviceBrandRepo)
    {
        $this->deviceBrandRepository = $deviceBrandRepo;
    }

    /**
     * Display a listing of the DeviceBrand.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->deviceBrandRepository->pushCriteria(new RequestCriteria($request));
        $deviceBrands = $this->deviceBrandRepository->all();

        return view('device_brands.index')
            ->with('deviceBrands', $deviceBrands);
    }

    /**
     * Show the form for creating a new DeviceBrand.
     *
     * @return Response
     */
    public function create()
    {
        return view('device_brands.create');
    }

    /**
     * Store a newly created DeviceBrand in storage.
     *
     * @param CreateDeviceBrandRequest $request
     *
     * @return Response
     */
    public function store(CreateDeviceBrandRequest $request)
    {
        $input = $request->all();

        $deviceBrand = $this->deviceBrandRepository->create($input);

        Flash::success('Device Brand saved successfully.');

        return redirect(route('deviceBrands.index'));
    }

    /**
     * Display the specified DeviceBrand.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $deviceBrand = $this->deviceBrandRepository->findWithoutFail($id);

        if (empty($deviceBrand)) {
            Flash::error('Device Brand not found');

            return redirect(route('deviceBrands.index'));
        }

        return view('device_brands.show')->with('deviceBrand', $deviceBrand);
    }

    /**
     * Show the form for editing the specified DeviceBrand.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $deviceBrand = $this->deviceBrandRepository->findWithoutFail($id);

        if (empty($deviceBrand)) {
            Flash::error('Device Brand not found');

            return redirect(route('deviceBrands.index'));
        }

        return view('device_brands.edit')->with('deviceBrand', $deviceBrand);
    }

    /**
     * Update the specified DeviceBrand in storage.
     *
     * @param  int              $id
     * @param UpdateDeviceBrandRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDeviceBrandRequest $request)
    {
        $deviceBrand = $this->deviceBrandRepository->findWithoutFail($id);

        if (empty($deviceBrand)) {
            Flash::error('Device Brand not found');

            return redirect(route('deviceBrands.index'));
        }

        $deviceBrand = $this->deviceBrandRepository->update($request->all(), $id);

        Flash::success('Device Brand updated successfully.');

        return redirect(route('deviceBrands.index'));
    }

    /**
     * Remove the specified DeviceBrand from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $deviceBrand = $this->deviceBrandRepository->findWithoutFail($id);

        if (empty($deviceBrand)) {
            Flash::error('Device Brand not found');

            return redirect(route('deviceBrands.index'));
        }

        $this->deviceBrandRepository->delete($id);

        Flash::success('Device Brand deleted successfully.');

        return redirect(route('deviceBrands.index'));
    }
}
