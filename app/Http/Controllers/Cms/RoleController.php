<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;
use App\Repositories\RoleRepository;
use App\Http\Controllers\AppBaseController;
use App\User;
use Artesaos\Defender\Permission;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RoleController extends AppBaseController
{
    /** @var  RoleRepository */
    private $roleRepository;

    public function __construct(RoleRepository $roleRepo)
    {
        $this->roleRepository = $roleRepo;
    }

    /**
     * Display a listing of the Role.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->roleRepository->pushCriteria(new RequestCriteria($request));
        $roles = $this->roleRepository->all();

        return view('roles.index')
            ->with('roles', $roles);
    }

    /**
     * Show the form for creating a new Role.
     *
     * @return Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created Role in storage.
     *
     * @param CreateRoleRequest $request
     *
     * @return Response
     */
    public function store(CreateRoleRequest $request)
    {
        $input = $request->all();

        $role = $this->roleRepository->create($input);

        Flash::success('Role saved successfully.');

        return redirect(route('roles.index'));
    }

    /**
     * Display the specified Role.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $role = $this->roleRepository->findWithoutFail($id);

        if (empty($role)) {
            Flash::error('Role not found');

            return redirect(route('roles.index'));
        }

        return view('roles.show')->with('role', $role);
    }

    /**
     * Show the form for editing the specified Role.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $role = $this->roleRepository->findWithoutFail($id);

        if (empty($role)) {
            Flash::error('Role not found');

            return redirect(route('roles.index'));
        }

        return view('roles.edit')->with('role', $role);
    }

    /**
     * Update the specified Role in storage.
     *
     * @param  int              $id
     * @param UpdateRoleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRoleRequest $request)
    {
        $role = $this->roleRepository->findWithoutFail($id);

        if (empty($role)) {
            Flash::error('Role not found');

            return redirect(route('roles.index'));
        }

        $role = $this->roleRepository->update($request->all(), $id);

        Flash::success('Role updated successfully.');

        return redirect(route('roles.index'));
    }

    /**
     * Remove the specified Role from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $role = $this->roleRepository->findWithoutFail($id);

        if (empty($role)) {
            Flash::error('Role not found');

            return redirect(route('roles.index'));
        }

        $this->roleRepository->delete($id);

        Flash::success('Role deleted successfully.');

        return redirect(route('roles.index'));
    }
	public function getAttackRole($role_id){
		$data['role'] = Role::find($role_id)    ;
		$data['permissions'] = Permission::all();
		return view('roles.role_permission')->with($data);
	}
	public function postAttackRole($id,Request $request){
		$input = array_keys(array_except($request->all(),'_token'));

		\Artesaos\Defender\Role::find($id)->syncPermissions($input);

		Flash::success('Cập nhật quyền thành công');
		return redirect(route('roles.index'));
	}

	public function getAttackUserPermission($user_id){
		$data['user'] = User::find($user_id);
		$data['permissions'] = Permission::all();
		return view('roles.user_permission')->with($data);
	}

	public function postAttackUserPermission($id,Request $request)
	{
		$input = array_keys(array_except($request->all(), '_token'));
		$new_input = [];
		foreach (Permission::all() as $value) {
			$new_input[$value->id]['value'] = false;
			if ($request->has('per') && array_key_exists($value->id, $request->all()['per'])) {
				$per_name = $request->all()['per'][$value->id];
				if ($per_name == 1) {
					$new_input[$value->id]['value'] = true;
				} else {
					$new_input[$value->id] = false;

				}
			}
		}
		User::find($id)->syncPermissions($new_input);

		Flash::success('Cập nhật quyền thành công');
		return redirect(route('users.index'));
	}
}
