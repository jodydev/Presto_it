<x-layout>
<br><br><br><br><br><br><br>
@if(auth()->user())
    <a href="{{route('announcements.create')}}" class=" button-login">Crea un Annuncio</a>
@endif



<x-hero/>



@livewire('home-index')
 


    <!-- Recenzioni -->
<section class="discount p-5"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="discount__pic">
                        <img src="/img/recenzioni.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="discount__text">
                        <div class="discount__text__title">
                            <span>Presto.it</span>
                            <h2>online</h2>
                            <span>Coming soon</span>
                        </div>
                        <div class="discount__countdown" id="countdown-time">
                            <div class="countdown__item">
                                <span>22</span>
                                <p>Giorni</p>
                            </div>
                            <div class="countdown__item">
                                <span>18</span>
                                <p>Ore</p>
                            </div>
                            <div class="countdown__item">
                                <span>46</span>
                                <p>Min</p>
                            </div>
                            <div class="countdown__item">
                                <span>05</span>
                                <p>Sec</p>
                            </div>
                        </div>
                        <a href="#">Torna su</a>
                    </div>
                </div>
            </div>
        </div>
 </section> 



    <!-- Banner Foto -->

<section class="instagram"> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="/public/img/banner/bambini.png">
                    <div class="instagram__text">
                        <i class="fa fa-shirt"></i>
                        <a href="#">Abbigliamento</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="/img/banner-categorie/foto-2.jpeg">
                    <div class="instagram__text">
                        <i class="fa fa-mobile-phone"></i>
                        <a href="#">Elettronica</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="/img/banner-categorie/foto-3.webp">
                    <div class="instagram__text">
                        <i class="fa fa-house"></i>
                        <a href="#">Casa</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="/img/banner-categorie/foto-4.avif">
                    <div class="instagram__text">
                        <i class="fa fa-book"></i>
                        <a href="#">Libri</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="/img/banner-categorie/foto-7.jpeg">
                    <div class="instagram__text">
                        <i class="fa fa-motorcycle"></i>
                        <a href="#">Motori</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="/img/banner-categorie/foto-8.jpeg">
                    <div class="instagram__text">
                        <i class="fa fa-futbol"></i>
                        <a href="#">Sport</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  



</x-layout>