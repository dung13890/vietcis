<div class="container">
<!-- JUMBOTRON -->
<div class="jumbotron jumbotron--with-captions">
    
    <div data-interval="5000" data-ride="carousel" id="headerCarousel" class="carousel slide">

        <div class="carousel-inner">
            <?php
                $dem = 0;
                $arrayPosts = $posts->toArray();
            ?>
                @foreach($slides as $slide)
            <div class="item @if ($dem == 0) active @endif">
                <img alt="{{$arrayPosts[$dem]['name'] or ''}}" sizes="100vw" src="{{asset($slide->image)}}">
                <div class="container hidden-xs">
                    <div class="jumbotron-content">
                        <div class="jumbotron-content__title">
                            <h3>{{$arrayPosts[$dem]['name'] or ''}}</h3>
                        </div>
                        <div class="jumbotron-content__description">
                            <p class="p1">
                                <span class="s1">{{$arrayPosts[$dem]['intro'] or ''}}</span>
                            </p>
                            <p>
                                @if (isset($arrayPosts[$dem]['intro']))
                                <a target="_self" href="{{route('post.show',$arrayPosts[$dem]['slug'])}}" class="btn btn-primary">CHI TIẾT</a>
                                @endif
                            </p>
                            <div class="w69b-screencastify-mouse"></div>
                        </div>
                    </div>
                </div>
            </div><!-- /.item -->
            <?php $dem++; ?>
            @endforeach            
        </div><!-- /.carousel-inner -->
    
        <div class="container">

            <a data-slide="prev" role="button" href="#headerCarousel" class="left jumbotron__control">
                <i class="fa  fa-caret-left"></i>
            </a>
            <a data-slide="next" role="button" href="#headerCarousel" class="right jumbotron__control">
                <i class="fa  fa-caret-right"></i>
            </a>
        </div><!-- /.container -->
        
    </div><!-- /.carousel -->
    
</div><!-- /.jumbotron -->
</div>