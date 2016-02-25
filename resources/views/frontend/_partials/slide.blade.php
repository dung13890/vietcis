<!-- JUMBOTRON -->
<div class="jumbotron jumbotron--with-captions">
    
    <div data-interval="5000" data-ride="carousel" id="headerCarousel" class="carousel slide">

        <div class="carousel-inner">
            <?php $dem = 0?>
                @foreach($slides as $slide)
                <?php $dem++;
                    $text = explode('-',$slide->name);
                    if (count($text) == 1) {
                        $text[0] = $slide->name;
                        $text[1] = '';
                    }
                ?>
            <div class="item @if ($dem == 1) active @endif">
                <img alt="{{$text[0]}}" sizes="100vw" src="{{asset($slide->image)}}">
                <div class="container">
                    <div class="jumbotron-content">
                        <div class="jumbotron-content__title">
                            <h1>{{$text[0]}}</h1>
                        </div>
                        <div class="jumbotron-content__description">
                            <p class="p1">
                                <span class="s1">{{$text[1]}}</span>
                            </p>
                            <p>
                                <a target="_self" href="{{$slide->link}}" class="btn btn-primary">CHI TIẾT</a>
                            </p>
                            <div class="w69b-screencastify-mouse"></div>
                        </div>
                    </div>
                </div>
            </div><!-- /.item -->
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