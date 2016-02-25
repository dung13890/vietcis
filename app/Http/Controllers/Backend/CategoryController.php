<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\Backend\CategoryRequest;
use App\Repositories\Contracts\CategoryRepository;
use App\Services\Contracts\CategoryService;

class CategoryController extends AbstractController
{
    protected $dataSelect = ['id','name','type','parent_id'];

    public function __construct(CategoryRepository $category)
    {
        parent::__construct($category);
    }

    public function index()
    {
        abort(401);
    }

    public function getDataWithType($type, $heading = null)
    {
    	parent::index();
        if ($type != 'post' && $type != 'product') abort(401);
        $this->compacts['type'] = $type;
        $this->compacts['categories'] = $this->repository->rootWithType($type, $this->dataSelect);
        $this->compacts['heading'] = !$heading ? $this->trans('object.create') : $heading;
        //$this->compacts['listCategories'] = $this->compacts['categories']->lists('name','id')->prepend('Chọn','0');
        $this->compacts['listCategories'] = $this->recursiveList($this->repository->posts(),0,[0=>'chọn']);
        
        return $this->viewRender();
    }

    public function create()
    {
        abort(401);
    }

    public function store(CategoryRequest $request, CategoryService $service)
    {
        $data = $request->all();
        return $this->storeData($data, $service, url()->previous());
    }

    public function show($id)
    {
        parent::show($id);
        return $this->viewRender();
    }

    public function edit($id)
    {
        parent::edit($id);
        $type = $this->compacts['item']->type;
        $heading = $this->trans('object.edit');
        return $this->getDataWithType($type, $heading);
    }

    public function update(CategoryRequest $request, CategoryService $service, $id)
    {
        $data = $request->all();
        return $this->updateData($data, $service, $id, url()->previous());
    }

    public function destroy(CategoryService $service, $id)
    {
        return $this->deleteData($service, $id);
    }
}
