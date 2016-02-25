<!-- FOOTER -->
<footer class="footer">
    
    <div class="footer-top">
        
        <div class="container">
            
            <div class="row">
                
                <div class="col-xs-12 col-md-4">
                    
                    <p>
                        <img alt="logo-footer" src="{{asset($configs->logo2)}}" class="logo">
                    </p>
                    <p>
                        {{$configs->introleft}}
                    </p>
                    <p>
                        <a target="_blank" href="{{$configs->facebook}}" class="social-icons__link"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="{{$configs->twitter}}" class="social-icons__link"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="{{$configs->google}}" class="social-icons__link"><i class="fa fa-google-plus"></i></a>
                        <a target="_blank" href="{{$configs->youtube}}" class="social-icons__link"><i class="fa fa-youtube"></i></a>
                    </p>
                    
                </div><!-- /.row -->
                @foreach($menuFooter as $footer)
                <div class="col-xs-12 col-md-2">
                    
                    <div class="widget_nav_menu">
                        <h6 class="footer-top__headings">{{$footer->name}}</h6>
                        <ul>
                            @foreach($footer->children as $footer2)
                            <?php
                                switch ($footer2->type) {
                                case 'pages':
                                    $url2 = route('page.show',isset($footer2->page->slug)? $footer2->page->slug : '');
                                    break;
                                case 'category-post':
                                    $url2 = route('post.category',isset($footer2->category->slug)? $footer2->category->slug : '');
                                    break;
                                case 'link':
                                    $url2 = $footer2->link;
                                    break;
                                }
                            ?>
                            <li><a href="{{$url2}}">{{$footer2->name}}</a></li>
                            @endforeach
                        </ul>
                    </div><!-- /.widget_nav_menu -->
                    
                </div><!-- /.row -->
                @endforeach
                
                <div class="col-xs-12 col-md-4">
                    
                    <h6 class="footer-top__headings">LIÊN HỆ</h6>
                    <p>
                        {{$configs->introright}}
                    </p>
                    <p>
                        <a target="_blank" href="#" class="btn btn-info">LIÊN HỆ NGAY</a>
                    </p>
                    
                </div><!-- /.row -->
                
            </div><!-- /.row -->
            
        </div><!-- /.footer -->
        
    </div><!-- /.footer-top -->
    
    <div class="footer-bottom">
        
        <div class="container">
            
            <div class="footer-bottom__left">
                {{$configs->copyright}}
            </div>
            
            <div class="footer-bottom__right">
            </div>
            
        </div><!-- /.container -->
        
    </div><!-- /.footer-bottom -->
    
</footer>