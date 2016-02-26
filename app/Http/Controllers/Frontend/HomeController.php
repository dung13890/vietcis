<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\SlideRepository;
use App\Repositories\Contracts\PostRepository;
use App\Repositories\Contracts\ServiceRepository;
use App\Repositories\Contracts\PartnerRepository;
use App\Repositories\Contracts\PageRepository;
use App\Services\Contracts\MailService;

class HomeController extends Controller
{
	public function index()
	{
	    $compacts['slides'] = app(SlideRepository::class)->getHome(3);
	    $compacts['boxHome'] = app(SlideRepository::class)->settingHome(4); 
	    $compacts['posts'] = app(PostRepository::class)->getHome(3,['slug','name','intro']); 
	    $compacts['services'] = app(ServiceRepository::class)->getHome(6);
	    $compacts['partners'] = app(PartnerRepository::class)->getHome(6);
	    return view('frontend.home.index',$compacts);
	}

	public function page($slug)
	{
		$compacts['page'] = app(PageRepository::class)->findBySlug($slug);
		return view('frontend.home.page',$compacts);
	}

	public function contact()
	{
		return view('frontend.home.contact');
	}

	public function postContact(Request $request, MailService $mail)
	{
		$mail->send($request->all());
		return redirect(url()->previous());
	}
}
