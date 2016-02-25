<div class="col-xs-12 col-md-3">
    <div class="sidebar">
        <div class="widget_search">
            {!! Form::open(['class' => 'search-form','url' => route('post.search'),'method' => 'GET']) !!}
            <label>
                <span class="screen-reader-text">Search for:</span>
                <input type="search" name="search" placeholder="tìm kiếm ..." class="search-field">
            </label>
            <button class="search-submit" type="submit"><i class="fa fa-lg fa-search"></i></button>
            {!!Form::close()!!}
        </div>
        <div class="widget_recent_entries">
            <h4 class="sidebar__headings">Bài viết ngẫu nhiên</h4> <ul>
                @foreach($postRandom as $random)
                <li>
                    <a href="{{route('post.show',$random->slug)}}">{{$random->name}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="widget_categories">
            <h4 class="sidebar__headings">Danh mục</h4>
            <ul>
                @foreach($categoryPost as $category)
                <li>
                    <a href="{{route('post.category',$category->slug)}}">{{$category->name}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>                    
</div><!-- /.col -->