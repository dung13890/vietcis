<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\ServiceRequest;
use App\Repositories\Contracts\ServiceRepository;
use App\Services\Contracts\ServiceService;

class ServiceController extends AbstractController
{
    protected $dataSelect = ['id','name','order','icon_fa'];

    public function __construct(ServiceRepository $slide)
    {
        parent::__construct($slide);
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

    public function store(ServiceRequest $request, ServiceService $service)
    {
    	$data = $request->all();
        return $this->storeData($data, $service);
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    	parent::edit($id);
    	return $this->viewRender();
    }

    public function update(ServiceRequest $request, ServiceService $service, $id)
    {
        $data = $request->all();
        return $this->updateData($data, $service, $id);
    }

    public function destroy(ServiceService $service, $id)
    {
    	return $this->deleteData($service, $id);
    }
}
