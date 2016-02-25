<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Repositories\Contracts\PostRepository;
use App\Repositories\Contracts\CategoryRepository;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function show($slug)
    {
    	$compacts['item'] = app(PostRepository::class)->findBySlug($slug);

    	return view('frontend.post.show',$compacts);
    }

    public function category($slug)
    {
    	$compacts['category'] = app(CategoryRepository::class)->findBySlug($slug);
    	$compacts['posts'] = $compacts['category']->posts()->paginate(10);

    	return view('frontend.post.category',$compacts);
    }

    public function search(Request $request)
    {
        $value = $request->search;
        $compacts['value'] = $value;
        $compacts['postSearch'] = app(PostRepository::class)->search($value);
        return view('frontend.post.search',$compacts);
    }
}
