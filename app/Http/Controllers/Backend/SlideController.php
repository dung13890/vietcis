<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\SlideRequest;
use App\Repositories\Contracts\SlideRepository;
use App\Services\Contracts\SlideService;

class SlideController extends AbstractController
{
    protected $dataSelect = ['id','name','status','created_at','image'];

    public function __construct(SlideRepository $slide)
    {
        parent::__construct($slide);
    }

    public function index()
    {
        parent::index();
        return $this->viewRender();
    }

    public function home()
    {
        parent::index();
        $this->view = 'slide.home';
        $this->compacts['heading'] = 'Cấu hình trang chủ';
        $this->compacts['slides'] = $this->repository->home();
        return $this->viewRender();
    }

    public function create()
    {
        parent::create();
        return $this->viewRender();
    }

    public function store(SlideRequest $request, SlideService $service)
    {
        $data = $request->all();
        $redirect = $data['type'] == 'home' ? url()->previous() : null;
        return $this->storeData($data, $service, $redirect);
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        parent::edit($id);
        if ($this->compacts['item']->type == 'home') {
            $this->compacts['slides'] = $this->repository->home();
            $this->view = $this->view = 'slide.home';
        }
        return $this->viewRender();
    }

    public function update(SlideRequest $request, SlideService $service, $id)
    {
        $data = $request->all();
        $redirect = $data['type'] == 'home' ? url()->previous() : null;
        return $this->updateData($data, $service, $id, $redirect);
    }

    public function destroy(SlideService $service, $id)
    {
        return $this->deleteData($service, $id);
    }
}
