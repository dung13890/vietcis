<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\PartnerRequest;
use App\Repositories\Contracts\PartnerRepository;
use App\Services\Contracts\PartnerService;

class PartnerController extends AbstractController
{
    protected $dataSelect = ['id','name','created_at','logo'];

    public function __construct(PartnerRepository $partner)
    {
        parent::__construct($partner);
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

    public function store(PartnerRequest $request, PartnerService $service)
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

    public function update(PartnerRequest $request, PartnerService $service, $id)
    {
        $data = $request->all();
        return $this->updateData($data, $service, $id);
    }

    public function destroy(PartnerService $service, $id)
    {
        return $this->deleteData($service, $id);
    }
}
