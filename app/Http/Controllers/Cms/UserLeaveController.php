<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserLeaveRequest;
use App\Http\Requests\UpdateUserLeaveRequest;
use App\Models\Absence;
use App\Models\User;
use App\Models\UserLeave;
use App\Repositories\UserLeaveRepository;
use App\Http\Controllers\AppBaseController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserLeaveController extends AppBaseController
{
    /** @var  UserLeaveRepository */
    private $userLeaveRepository;

    public function __construct(UserLeaveRepository $userLeaveRepo)
    {
        $this->userLeaveRepository = $userLeaveRepo;
    }

    /**
     * Display a listing of the UserLeave.
     *
     * @param Request $request
     * @return Response
     */
    public function getDetail(){
		$data['users'] = User::paginate(15);
		return view('user_leaves.lists_user')->with($data);
    }
    public function index(Request $request)
    {
        $this->userLeaveRepository->pushCriteria(new RequestCriteria($request));
        $userLeaves = $this->userLeaveRepository->all();

        return view('user_leaves.index')
            ->with('userLeaves', $userLeaves);
    }

	public function userLeavesDetail($id){
		$userLeaves['userLeaves'] = $this->userLeaveRepository->findWhere(['user_id'=>$id,'year_id'=>1]);

    	return view('user_leaves.index')->with($userLeaves);
	}
	public function memberLeavesDetail(){
	    $data = [];
//		$userLeaves['userLeaves'] = $this->userLeaveRepository->findWhere(['user_id'=>Auth::user()->id,'year_id'=>1]);
        $all_abseces =  UserLeave::where('user_id',Auth::user()->id)
            ->get();
        $i = 0;

        foreach ($all_abseces as $row){
		    $data[$i]['total'] = $row;
            $all_abseces =  Absence::where('user_id',Auth::user()->id)
                ->whereYear('start_date',Carbon::now()->year)
                ->where('absence_type_id',$row->absence_type_id)
                ->whereIn('absence_status_id',[1,2])
                ->get();
            $total = 0;
            foreach ($all_abseces as $row1){
                $total += $row1['days'];
            }
		    $data[$i]['taked'] = $total;
            $data[$i]['balance'] = $row->total_leave - $total;
            $i ++;
        }
        $data1['data'] = $data;
		return view('user_leaves.member-index')->with($data1);
	}
    /**
     * Show the form for creating a new UserLeave.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_leaves.create');
    }

    /**
     * Store a newly created UserLeave in storage.
     *
     * @param CreateUserLeaveRequest $request
     *
     * @return Response
     */
    public function store(CreateUserLeaveRequest $request)
    {
        $input = $request->all();

        $userLeave = $this->userLeaveRepository->create($input);

        Flash::success('User Leave saved successfully.');

        return redirect(route('userLeaves.index'));
    }

    /**
     * Display the specified UserLeave.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userLeave = $this->userLeaveRepository->findWithoutFail($id);

        if (empty($userLeave)) {
            Flash::error('User Leave not found');

            return redirect(route('userLeaves.index'));
        }

        return view('user_leaves.show')->with('userLeave', $userLeave);
    }

    /**
     * Show the form for editing the specified UserLeave.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userLeave = $this->userLeaveRepository->findWithoutFail($id);

        if (empty($userLeave)) {
            Flash::error('User Leave not found');

            return redirect(route('userLeaves.index'));
        }

        return view('user_leaves.edit')->with('userLeave', $userLeave);
    }

    /**
     * Update the specified UserLeave in storage.
     *
     * @param  int              $id
     * @param UpdateUserLeaveRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserLeaveRequest $request)
    {
        $userLeave = $this->userLeaveRepository->findWithoutFail($id);

        if (empty($userLeave)) {
            Flash::error('User Leave not found');

            return redirect(route('userLeaves.index'));
        }

        $userLeave = $this->userLeaveRepository->update($request->all(), $id);

        Flash::success('User Leave updated successfully.');

        return redirect(route('userLeaves.index'));
    }

    /**
     * Remove the specified UserLeave from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userLeave = $this->userLeaveRepository->findWithoutFail($id);

        if (empty($userLeave)) {
            Flash::error('User Leave not found');

            return redirect(route('userLeaves.index'));
        }

        $this->userLeaveRepository->delete($id);

        Flash::success('User Leave deleted successfully.');

        return redirect(route('userLeaves.index'));
    }
}
