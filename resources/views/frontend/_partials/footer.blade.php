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
                        <a target="_blank" href="{{$configs->youtube}}" class="social-icons__link"><i class="fa fa-youtube"></i></a>
                    </p>
                    
                </div><!-- /.row -->
                
                <div class="col-xs-12 col-md-4 col-md-offset-4">
                    
                    <h6 class="footer-top__headings">LIÊN HỆ</h6>
                    <p>
                        {{$configs->introright}}
                    </p>
                    <p>
                        <a target="_blank" href="{{route('contact.show')}}" class="btn btn-info">LIÊN HỆ NGAY</a>
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