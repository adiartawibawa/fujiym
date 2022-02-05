<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Repositories\Admin\Interfaces\PermissionRepositoryInterface;
use App\Repositories\Admin\Interfaces\RoleRepositoryInterface;
use App\Repositories\Admin\Interfaces\UserRepositoryInterface;
use App\Traits\Authorizable;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use Authorizable;

    private $roleRepository;
    private $permissionRepository;
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository, RoleRepositoryInterface $roleRepository, PermissionRepositoryInterface $permissionRepository) // phpcs:ignore
    {
        // parent::__construct();

        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
        $this->permissionRepository = $permissionRepository;

        // $this->data['currentAdminMenu'] = 'users';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = $request->all();

        $options = [
            'per_page' => $this->perPage,
            'order' => [
                'created_at' => 'desc',
            ],
            'filter' => $params,
        ];

        if (!empty($params['start_date']) && !empty($params['end_date'])) {
            $startDate = Carbon::parse($params['start_date']);
            $endDate = Carbon::parse($params['end_date']);

            if ($endDate < $startDate) {
                return redirect('users')->with('error', __('general.invalid_date_range'));
            }
        }

        $this->data['filter'] = $params;

        $this->data['users'] = $this->userRepository->findAll($options);

        return view('pages.users.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['permissions'] = $this->permissionRepository->findAll();
        $this->data['roles'] = $this->roleRepository->findAll()->pluck('name', 'id');
        $this->data['roleId'] = null;

        return view('pages.users.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $params = $request->validated();

        if ($this->userRepository->create($params)) {
            return redirect('users')
                ->with('success', __('users.success_create_message'));
        }

        return redirect('users/create')
            ->with('error', __('users.fail_create_message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['user'] = $this->userRepository->findById($id);

        return view('pages.users.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->findById($id);

        $this->data['user'] = $user;
        $this->data['permissions'] = $this->permissionRepository->findAll();
        $this->data['roles'] = $this->roleRepository->findAll()->pluck('name', 'id');
        $this->data['roleId'] = $user->roles->first() ? $user->roles->first()->id : null;

        return view('pages.users.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = $this->userRepository->findById($id);

        if ($this->userRepository->update($id, $request->validated())) {
            return redirect('users')
                ->with('success', __('users.success_updated_message', ['name' => $user->name]));
        }

        return redirect('users')
            ->with('error', __('users.fail_to_update_message', ['name' => $user->name]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->findById($id);

        if ($user->id == auth()->user()->id) {
            return redirect('users')
                ->with('error', 'Could not delete yourself.');
        }

        if ($user->hasRole(\App\Models\Role::ADMIN)) {
            return redirect('users')
                ->with('error', 'Could not delete the admin user.');
        }

        if ($this->userRepository->delete($id)) {
            return redirect('users')
                ->with('success', __('users.success_deleted_message', ['name' => $user->name]));
        }

        return redirect('users')
            ->with('error', __('users.fail_to_delete_message', ['name' => $user->name]));
    }
}
