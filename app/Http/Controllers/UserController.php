<?php

namespace App\Http\Controllers;

use App\Events\UserCreated;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Mail\News;
use App\Models\Role;
use App\Models\User;
use App\Models\UserEmployeeType;
use App\Models\UserRank;
use App\Models\UserStatus;
use App\Repositories\BankRepository;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository, $bankReponsitory;

    public function __construct(UserRepository $userRepo,BankRepository $bankrepon)
    {
        $this->userRepository = $userRepo;
        $this->bankReponsitory = $bankrepon;

    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userRepository->pushCriteria(new RequestCriteria($request));
        $users = $this->userRepository->all();

        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        $data['listUserType'] = UserEmployeeType::pluck('user_employee_type_name', 'id');
        $data['listUserStatus'] = UserStatus::pluck('user_status_name', 'id');
        $data['listUserRank'] = UserRank::pluck('user_rank_name', 'id');
	    $data['listRoles'] = Role::pluck('display_name', 'id');
	    $data['listBank'] = $this->bankReponsitory->pluck('name','id');
	    return view('users.create')->with($data);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();
//        dd($input);
        $input['start_date'] = Carbon::createFromFormat('d/m/Y', $input['start_date']);
        $input['password'] = Hash::make($input['password']);
	    if($input['contract_date_end'] != null){
        $input['contract_date_end'] = Carbon::createFromFormat('d/m/Y', $input['contract_date_end']);
	    }
	    if($input['birthday'] != null){
        	$input['birthday'] = Carbon::createFromFormat('d/m/Y', $input['birthday']);
        }
	    if($input['card_date'] != null){
		    $input['card_date'] = Carbon::createFromFormat('d/m/Y', $input['card_date']);
	    }
        $input['contract_file'] = null;
        if ($request->hasFile('contract_file')) {
            $filename = str_slug($input['full_name'], '_') . '.' . $request->file('contract_file')->getClientOriginalExtension();
            $path = 'upload/contracts/' . $input['name'] . '/';

            $request->file('contract_file')->move($path, $filename);
            $input['contract_file'] = $path . $filename;
        }
        $user = $this->userRepository->create($input);
//        $roles = Role::whereIn('id',$input['roles'])->get();
		$user->syncRoles($input['roles']);
        Flash::success('Tài khoản được tạo thành công.');
        event(new UserCreated($user->id));
        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $data['listUserType'] = UserEmployeeType::pluck('user_employee_type_name', 'id');
        $data['listUserStatus'] = UserStatus::pluck('user_status_name', 'id');
        $data['listUserRank'] = UserRank::pluck('user_rank_name', 'id');
        $data['listRoles'] = Role::pluck('display_name', 'id');
        $user = $this->userRepository->findWithoutFail($id);
        $data['user_roles'] = $user->roles->pluck('id');
	    $data['listBank'] = $this->bankReponsitory->pluck('name','id');

	    if (empty($user)) {
            Flash::error('User not found');
            return redirect(route('users.index'));
        }

        return view('users.edit')->with('user', $user)->with($data);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }
        $input = $request->all();
        $input['start_date'] = Carbon::createFromFormat('d/m/Y', $input['start_date']);
        $input['password'] = Hash::make($input['password']);
        $input['contract_date_end'] = ( $input['contract_date_end'] != null) ? (Carbon::createFromFormat('d/m/Y', $input['contract_date_end'])) : null;
	    if($input['birthday'] != null){
		    $input['birthday'] = Carbon::createFromFormat('d/m/Y', $input['birthday']);
	    }
	    if($input['card_date'] != null){
		    $input['card_date'] = Carbon::createFromFormat('d/m/Y', $input['card_date']);
	    }
        if ($request->hasFile('contract_file')) {
            $filename = str_slug($input['full_name'], '_') . '.' . $request->file('contract_file')->getClientOriginalExtension();
            $path = 'upload/contracts/' . $input['name'] . '/';

            $request->file('contract_file')->move($path, $filename);
            $input['contract_file'] = $path . $filename;
        }

        $user = $this->userRepository->update($input, $id);
        Flash::success('Tài khoản đã được cập nhật');
//        Mail::to('tieuquangmg@gmail.com')->send(new News());
        event(new UserCreated($user->id));
        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }

    public function getExportExcel()
    {
        $datas = User::all();
        $fileName = "Danh sách Tài khoản - " . Carbon::now()->format('d_m_Y_h_i_s');
        Excel::create($fileName, function ($excel) use ($datas) {

            // Set the title
            $excel->setTitle('Danh sách tài khoản');

            // Chain the setters
            $excel->setCreator('Admin')
                ->setCompany('VTD');

            // Call them separately
            $excel->setDescription('Danh sách tài khoản');
            $excel->sheet('Sheet1', function ($sheet) use ($datas) {
                $sheet->cell('A1:Z1', function ($row) {

                    // call cell manipulation methods
                    $row->setBackground('#00E4FF');

                });
                $sheet->fromModel($datas);
            });
        })->export('xlsx');
    }
}
