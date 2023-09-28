<!-- Footer Section -->
<footer class="footer bg-black">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="{{route('index')}}"><img src="{{asset('img/logo/code_geeks.png')}}" class="img-fluid" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6 class="text-light">{{__('traduzioni.FastLinks')}}</h6>
                    <ul>   
                        <li><a href="/contatti">{{__('traduzioni.Contatti')}}</a></li>
                        <li><a href="/privacy">FAQ</a></li>
                        <li><a href="/privacy">Privacy</a></li>
                        @if (auth()->check() && !auth()->user()->is_revisor)
                        <li><a href="{{route('contacts')}}">{{__('traduzioni.BecomeW')}}</a></li>
                        @endif
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6 class="text-light">Account</h6>
                    <ul>
                        <li><a href="{{ route('users.profile') }}">Account</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6 class="text-light">NEWSLETTER</h6>
                    <form method="POST"action="{{route('mail.news-letter')}}">
                        @csrf
                        <input type="email" name="email" placeholder="{{__('traduzioni.MailList')}}" required> </input>
                        <button type="submit" class="site-btn">{{__('traduzioni.Iscriviti')}}</button>
                    </form>
                    <div class="footer__social">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
