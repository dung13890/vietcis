<!-- HEADER -->
<div class="header__container">
    
    <div class="container">
        
        <header class="header">
            
            <div class="header__logo">
                <a href="/">
                    <img class="img-responsive" srcset="{{asset($configs->logo1)}}" alt="CargoPress" src="{{$configs->logo1}}">
                </a>
                <button data-target="#cargopress-navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="navbar-toggle__text">MENU</span>
                    <span class="navbar-toggle__icon-bar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </span>
                </button>
            </div><!-- /.header__logo -->
            
            <div class="header__navigation">
                <nav class="collapse navbar-collapse" id="cargopress-navbar-collapse">
                    <ul class="main-navigation js-main-nav js-dropdown">
                        <li class="current-menu-item">
                            <a href="/">Trang chủ</a>
                        </li>
                        @foreach($menuHead as $menu)
                        <?php
                          	switch ($menu->type) {
                            case 'pages':
                              	$url = route('page.show',isset($menu->page->slug)? $menu->page->slug : '');
                              	break;
                            case 'category-post':
                              	$url = route('post.category',isset($menu->category->slug)? $menu->category->slug : '');
                              	break;
                            case 'link':
                              	$url = $menu->link;
                              	break;
                          	}
                        ?>
                        <li class="@if (count($menu->children) > 0) menu-item-has-children @endif">
                            <a href="{{$url}}">{{$menu->name}}</a>
                            @if (count($menu->children) > 0)
                            <ul role="menu" class="sub-menu">
                            	@foreach($menu->children as $children)
                            	<?php
		                          	switch ($children->type) {
		                            case 'pages':
		                              	$url2 = route('page.show',isset($children->page->slug)? $children->page->slug : '');
		                              	break;
		                            case 'category-post':
		                              	$url2 = route('post.category',isset($children->category->slug)? $children->category->slug : '');
		                              	break;
		                            case 'link':
		                              	$url2 = $children->link;
		                              	break;
		                          	}
		                        ?>
                                <li><a href="{{$url2}}">{{$children->name}}</a></li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </nav>
            </div><!-- /.header__navigation -->
            
            <div class="header__widgets">
                
                <div class="widget-icon-box">
                    
                    <div class="icon-box">  
                        <i class="fa fa-headphones"></i>
                        <h4 class="icon-box__title">Điện thoại</h4>
                        <span class="icon-box__subtitle">{{$configs->phone}}</span>
                    </div>
                
                </div>
                
                <div class="widget-icon-box">
                    
                    <div class="icon-box">  
                        <i class="fa fa-clock-o"></i>
                        <h4 class="icon-box__title">Giờ làm việc</h4>
                        <span class="icon-box__subtitle">{{$configs->timeword}}</span>
                    </div>
                
                </div>
            
                <div class="widget-icon-box">
                    
                    <div class="icon-box">
                        <i class="fa fa-envelope-o"></i>
                        <h4 class="icon-box__title">Email</h4>
                        <span class="icon-box__subtitle">{{$configs->email}}</span>
                    </div>
                    
                </div>
            
                <a href="{{route('contact.show')}}" target="_self" class="btn btn-info" id="button_requestQuote">Liên hệ</a>
        
            </div><!-- /.header__widgets -->
        
            <div class="header__navigation-widgets">
                <a target="_blank" href="{{$configs->facebook}}" class="social-icons__link"><i class="fa fa-facebook"></i></a>
                <a target="_blank" href="{{$configs->youtube}}" class="social-icons__link"><i class="fa fa-youtube"></i></a>
            </div>
    
        </header>
    
    </div><!-- /.container -->
        
        </div><!-- /.header__container -->