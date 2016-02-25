<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Services\Contracts\AbstractService;
use App\Http\Controllers\Controller;

abstract class AbstractController extends Controller
{
    protected $repository;

    protected $repositoryName;

    protected $user;

    protected $compacts;

    protected $view;

    protected $viewPrefix = 'backend.';

    protected $dataSelect = ['*'];

    protected $lang = array(
        'prefix' => 'repositories.',
        'replacements' => array(),
    );

    protected $e = array(
        'code' => 0,
        'message' => null,
    );

    public function __construct($repository = null)
    {
        $this->repositorySetup($repository);
         $this->lang['replacements'] = [
            'object' => $this->trans($this->repositoryName),
        ];
        $this->user = \Auth::user();
    }

    public function repositorySetup($repository = null)
    {
        $this->repository = $repository;
        $this->repositoryName = strtolower(class_basename($this->repository->getModel()));
    }

    public function trans($str = null, $data = array())
    {
        $replacements = array_merge($data, $this->lang['replacements']);
        return trans($this->lang['prefix'].$str, $replacements);
    }

    public function cannot($permission)
    {
        //return $this->user->cannot($permission,$this->repositoryName);
    }

    public function recursiveList($data, $parent = 0, $array = [], $str = '')
    {
        if ($data) {
            foreach ($data as $item) {
                if ($item->parent_id == $parent) {
                    $array[$item->id] = $str . $item->name;
                    $array = $this->recursiveList($data, $item->id, $array, $str . '- - - ');
                }
            }
        }
        return $array;
    }

    public function viewRender($data = [], $view = null)
    {
        $view = $view ? $view : $this->view;
        $compacts = array_merge($data, $this->compacts);
        return view($this->viewPrefix.$view, $compacts);
    }

    public function getData($items = null)
    {
    	return \Datatables::of($items ? $items : $this->repository->all($this->dataSelect))
        ->addColumn('actions', function ($item) {
            $actions = [];
                $actions['show'] = [
                    'uri' => route('admin.'.$this->repositoryName.'.show', $item->id),
                    'label' => $this->trans('show'),
                ];
                $actions['edit'] = [
                    'uri' => route('admin.'.$this->repositoryName.'.edit', $item->id),
                    'label' => $this->trans('edit'),
                ];
                $actions['delete'] = [
                    'uri' => route('admin.'.$this->repositoryName.'.destroy', $item->id),
                    'label' => $this->trans('delete'),
                ];

            return $actions;
        })->make(true);
    }

    public function index()
    {
        //if ( $this->cannot('read') ) abort(503);
        $this->view = $this->repositoryName.'.index';
        $this->compacts['heading'] = $this->trans('object.index');
    }

    public function create()
    {
        //if ( $this->cannot('create') ) abort(503);
        $this->view = $this->repositoryName.'.create';
        $this->compacts['heading'] = $this->trans('object.create');
    }

    public function show($id)
    {
        $this->view = $this->repositoryName.'.show';
        $this->compacts['item'] = $this->repository->findOrFail($id);
        //if ( $this->user->cannot('read', $this->compacts['item']) ) abort(503);
        $this->compacts['heading'] = $this->trans('object.show');
    }

    public function edit($id)
    {
        $this->view = $this->repositoryName.'.edit';
        $this->compacts['item'] = $this->repository->findOrFail($id);
        //if ( $this->user->cannot('update', $this->compacts['item']) ) abort(503);
        $this->compacts['heading'] = $this->trans('object.edit');
    }

    public function storeData(array $data, AbstractService $service, $redirect = null)
    {
        //if ( $this->cannot('create') ) abort(503);
        $redirect = $redirect ? $redirect : route('admin.'.$this->repositoryName.'.index');
        try {
            $item = $service->store($data);
            $this->e['message'] = $this->trans('object_created_successfully');
        } catch (\Exception $e) {
            $this->e['code'] = 100;
            $this->e['message'] = $this->trans('object_created_unsuccessfully');
        }
        return redirect($redirect)->with('flash_message',json_encode($this->e, true));
    }

    public function updateData(array $data, AbstractService $service, $id, $redirect = null)
    {
        $item = $this->repository->findOrFail($id);
        //if ( $this->user->cannot('update', $item) ) abort(503);
        $redirect = $redirect ? $redirect : route('admin.'.$this->repositoryName.'.index');
        try {
            $service->update($item, $data);
            $this->e['message'] = $this->trans('object_updated_successfully');
        } catch (\Exception $e) {
            //dd($e);
            $this->e['code'] = 100;
            $this->e['message'] = $this->trans('object_updated_unsuccessfully');
        }
        return redirect($redirect)->with('flash_message',json_encode($this->e, true));
    }

    public function deleteData(AbstractService $service, $id, $redirect = null)
    {
        $item = $this->repository->findOrFail($id);
        //if ( $this->user->cannot('delete', $item) ) abort(503);
        $redirect = $redirect ? $redirect : route('admin.'.$this->repositoryName.'.index');
        try {
            $service->delete($item);
            $this->e['message'] = $this->trans('object_deleted_successfully');
        } catch (\Exception $e) {
            $this->e['code'] = 100;
            $this->e['message'] = $this->trans('object_deleted_unsuccessfully');
        }
        if (\Request::ajax() || \Request::wantsJson()) {
            return session()->flash('flash_message', json_encode($this->e, true));
        }
        return redirect($redirect)->with('flash_message',json_encode($this->e, true));
    }
}
