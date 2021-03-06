<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\UploadRequest;
use App\Services\Contracts\UploadService;
use App\Repositories\Contracts\PostRepository;

class DashboardController extends AbstractController
{
    public function __construct(PostRepository $post)
    {
        parent::__construct($post);
    }

	public function index()
	{
        return view('backend.dashboard.index');
	}

	public function uploadImage(UploadRequest $request, UploadService $service)
	{
		$data = $request->all();
		return '/' . $service->image($data);
	}

	public function resize($filename, $width = 100, $height = 100)
    {
        if (strpos($filename, '/tmp/') == false) {
        } else {
            $filename = (!filter_var($filename, FILTER_VALIDATE_URL) === false) ? urldecode($filename) : public_path(urldecode($filename));
        }
        if(!\File::exists(public_path('uploads/images/resize'))) {
            \File::makeDirectory(public_path('uploads/images/resize'), $mode = 0755, true, true);
        }
        $name = pathinfo($filename, PATHINFO_FILENAME);
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $path = 'uploads/images/resize/' . $name . '-' . $width . 'x' . $height . '.' . $ext;
        $destinationPath = public_path($path);
        if ( ! \File::isFile($destinationPath) ) {
            $imageResize = \Image::make($filename)->fit($width, $height)->save($destinationPath);
            return \Response::make($imageResize, 200, array('Content-Type' => $ext));
        }
            return redirect(asset($path)); 
    }
}
