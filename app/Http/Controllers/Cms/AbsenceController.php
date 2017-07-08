<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAbsenceRequest;
use App\Http\Requests\UpdateAbsenceRequest;
use App\Models\Absence;
use App\Models\AbsenceType;
use App\Models\User;
use App\Models\UserLeave;
use App\Repositories\AbsenceRepository;
use App\Http\Controllers\AppBaseController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AbsenceController extends AppBaseController
{
    /** @var  AbsenceRepository */
    private $absenceRepository;

    public function __construct(AbsenceRepository $absenceRepo)
    {
        $this->absenceRepository = $absenceRepo;
    }

    /**
     * Display a listing of the Absence.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->absenceRepository->pushCriteria(new RequestCriteria($request));
        $absences = $this->absenceRepository->all();

        return view('absences.index')->with('absences', $absences);
    }

    public function getMyAbsences(Request $request)
    {
        session()->flash('back_url', 'absences.all.member');
        $this->absenceRepository->pushCriteria(new RequestCriteria($request));
        $absences = $this->absenceRepository->findWhere(['user_id' => Auth::user()->id]);

        return view('absences.member-index')
            ->with('absences', $absences);
    }

    /**
     * Show the form for creating a new Absence.
     *
     * @return Response
     */
    public function create()
    {
        $data['userList'] = User::pluck('full_name', 'id');
        $data['absence'] = AbsenceType::pluck('absence_type_name', 'id');
        return view('absences.create')->with($data);
    }

    public function getMemberCreate()
    {
        session()->flash('back-url', "absences.all.member");
        $data['userList'] = User::pluck('full_name', 'id');
        $data['absence'] = AbsenceType::pluck('absence_type_name', 'id');
        return view('absences.member-create')->with($data);
    }

    /**
     * Store a newly created Absence in storage.
     *
     * @param CreateAbsenceRequest $request
     *
     * @return Response
     */
    public function store(CreateAbsenceRequest $request)
    {
        try {
            $input = $request->all();
            $limit = UserLeave::where('absence_type_id', $input['absence_type_id'])
                ->where('year_id', 1)//hardcode
                ->where('user_id', $input['user_id'])
                ->first();

            $checkdate = Carbon::createFromFormat('d/m/Y', $input['start_date']);
            if ($checkdate <= Carbon::yesterday()) {
                return redirect()->back()->withInput()->withErrors("Ngày bắt đầu phải sau hiện tại");
            }
            $all_abseces = Absence::where('user_id', Auth::user()->id)
                ->whereYear('start_date', Carbon::now()->year)
                ->where('absence_type_id', $input['absence_type_id'])
                ->whereIn('absence_status_id', [1, 2])
                ->get();
            $total = 0;
            foreach ($all_abseces as $row) {
                $total += $row['days'];
            }
            if (($total + $input['days']) > $limit['total_leave']) {
                return redirect()->back()->withInput()->withErrors("Vượt quá số ngày cho phép");
            };
            $input['absence_status_id'] = 1;
            $input['start_date'] = Carbon::createFromFormat('d/m/Y', $input['start_date']);

            $absence = $this->absenceRepository->create($input);
            return redirect(route(session('back-url') != null ? session('back-url') : "absences.index" ));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified Absence.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $absence = $this->absenceRepository->findWithoutFail($id);

        if (empty($absence)) {
            Flash::error('Đơn xin không tồn tại');

            return redirect(route('absences.index'));
        }

        return view('absences.show')->with('absence', $absence);
    }

    /**
     * Show the form for editing the specified Absence.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $absence = $this->absenceRepository->findWithoutFail($id);

        if (empty($absence)) {
            Flash::error('Absence not found');

            return redirect(route('absences.index'));
        }
        $data['userList'] = User::pluck('full_name', 'id');

        return view('absences.edit')->with('absence', $absence)->with($data);
    }

    /**
     * Update the specified Absence in storage.
     *
     * @param  int $id
     * @param UpdateAbsenceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAbsenceRequest $request)
    {
        $absence = $this->absenceRepository->findWithoutFail($id);
        if (empty($absence)) {
            Flash::error('Absence not found');

            return redirect(route('absences.index'));
        }
        $input = $request->all();
        $input['start_date'] = Carbon::createFromFormat('d/m/Y', $input['start_date']);
        $absence = $this->absenceRepository->update($input, $id);

        Flash::success('Absence updated successfully.');

        return redirect(route('absences.index'));
    }

    /**
     * Remove the specified Absence from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $absence = $this->absenceRepository->findWithoutFail($id);

        if (empty($absence)) {
            Flash::error('Đơn không tồn tại');

            return redirect(route('absences.all.member'));
        }
        if (($absence->absence_status_id == 2 || $absence->absence_status_id == 3) && $absence->start_date > Carbon::now()) {
            Flash::error('Không thể hủy đơn');
            return redirect(route(session('back_url')));
        }
        $this->absenceRepository->delete($id);

        Flash::success('Absence deleted successfully.');

        return redirect(route('absences.all.member'));
    }
}
