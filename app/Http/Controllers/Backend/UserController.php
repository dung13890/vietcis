<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\UserRequest;
use App\Repositories\Contracts\UserRepository;
use App\Services\Contracts\UserService;

class UserController extends AbstractController
{
    protected $dataSelect = ['id','name','username','email'];

    public function __construct(UserRepository $user)
    {
        parent::__construct($user);
    }

    public function index()
    {
        parent::index();
        return $this->viewRender();
    }

    public function create()
    {
    	parent::create();
    	return $this->viewRender();
    }

    public function store(UserRequest $request, UserService $service)
    {
        $data = $request->all();
        return $this->storeData($data, $service);
    }

    public function show($id)
    {
        parent::show($id);
        return $this->viewRender();
    }

    public function edit($id)
    {
        parent::edit($id);
        return $this->viewRender();
    }

    public function update(UserRequest $request, UserService $service, $id)
    {
        $data = $request->all();
        return $this->updateData($data, $service, $id);
    }

    public function destroy(UserService $service, $id)
    {
        return $this->deleteData($service, $id);
    }
}
