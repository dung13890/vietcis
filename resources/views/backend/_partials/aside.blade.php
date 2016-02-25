<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{$me->name}}</strong>
                         </span> <span class="text-muted text-xs block">{{$me->email}} <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="{{route('admin.profile')}}">Profile</a></li>
                        <li><a href="{{route('admin.profile.edit')}}">Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    Be ben
                </div>
            </li>
            <li class="active">
                <a href="/admin"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-newspaper-o"></i> <span class="nav-label">{{trans('repositories.post')}}</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('admin.post.index')}}">danh sách {{trans('repositories.post')}}</a></li>
                    <li><a href="{!!route('admin.category.type','post')!!}">{{trans('repositories.category')}}</a></li>
                </ul>
            </li>
             <li>
                <a href="{{route('admin.page.index')}}"><i class="fa fa-file-o"></i> <span class="nav-label">{{trans('repositories.page')}}</span></a>
            </li>
            <li>
                <a href="{{route('admin.slide.index')}}"><i class="fa fa-file-movie-o"></i> <span class="nav-label">{{trans('repositories.slide')}}</span></a>
            </li>
            {{--
            <li>
                <a href="{{route('admin.partner.index')}}"><i class="fa fa-user"></i> <span class="nav-label">{{trans('repositories.partner')}}</span></a>
            </li>
            <li>
                <a href="{{route('admin.service.index')}}"><i class="fa fa-truck"></i> <span class="nav-label">{{trans('repositories.service')}}</span></a>
            </li>
            --}}
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('admin.menu.section','head')}}">Menu chính</a></li>
                    <li><a href="{{route('admin.menu.section','footer')}}">Menu footer</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">{{trans('repositories.config')}}</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('admin.user.index')}}">{{trans('repositories.user')}}</a></li>
                    <li><a href="{{route('admin.config.index')}}">Cấu hình chung</a></li>
                    <li><a href="{{route('admin.slide.home')}}">Cấu hình trang chủ</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
