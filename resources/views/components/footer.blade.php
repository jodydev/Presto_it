<!-- Footer Section -->
<footer class="footer grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Link veloci</h6>
                    <ul>
                        <li><a href="#">Altro</a></li>
                        <li><a href="#">Contatti</a></li>
                        @if (!auth()->check())
                        <li><a href="#">FAQ</a></li>
                        @else
                        <li><a href="{{route('become.revisor')}}">Diventa revisore</a></li>
                        @endif
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>Account</h6>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Stato ordine</a></li>
                        <li><a href="#">Lista desideri</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6>NEWSLETTER</h6>
                    <form action="#">
                        <input type="text" placeholder="Inserisci la tua email">
                        <button type="submit" class="site-btn">Iscriviti</button>
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
