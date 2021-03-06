<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\PostRequest;
use App\Repositories\Contracts\PostRepository;
use App\Repositories\Contracts\CategoryRepository;
use App\Services\Contracts\PostService;

class PostController extends AbstractController
{
    protected $dataSelect = ['id','name','image','status','slug'];

    protected $categoryRepository;

    public function __construct(PostRepository $post, CategoryRepository $category)
    {
        parent::__construct($post);
        $this->categoryRepository = $category;
    }

    public function index()
    {
        parent::index();
        $this->compacts['categories'] = $this->recursiveList($this->categoryRepository->posts());

        return $this->viewRender();
    }

    public function getDataWithCategory($category)
    {
        $category = $this->categoryRepository->findOrFail($category);
        $items = $category->posts()->get($this->dataSelect);
        return $this->getData($items);
    }

    public function category($category)
    {
        $this->compacts['category'] = $this->categoryRepository->findOrFail($category);
        return $this->index();
    }

    public function create()
    {
        parent::create();
        $this->compacts['categories'] = $this->recursiveList($this->categoryRepository->posts());
        
        return $this->viewRender();
    }

    public function store(PostRequest $request, PostService $service)
    {
        $data = $request->all();
        return $this->storeData($data, $service);
    }

    public function show($id)
    {
        //parent::show($id);
        //return $this->viewRender();
    }

    public function edit($id)
    {
        parent::edit($id);
        $this->compacts['categories'] = $this->recursiveList($this->categoryRepository->posts());
        return $this->viewRender();
    }

    public function update(PostRequest $request, PostService $service, $id)
    {
        $data = $request->all();
        return $this->updateData($data, $service, $id);
    }

    public function destroy(PostService $service, $id)
    {
        return $this->deleteData($service, $id);
    }
}
