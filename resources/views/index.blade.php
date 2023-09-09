<x-layout>

@if(auth()->user())
    <a href="{{route('announcements.create')}}" class=" button-login">Crea un Annuncio</a>
@endif



<x-hero/>



<!-- Categorie -->

<div class="container p-5 mt-4">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="section-title">
                <h4>Gli ultimi annunci</h4>
            </div>
        </div>
        <div class="col-lg-8 col-md-8">
            <ul class="filter__controls">
                <li class="active">Tutte le categorie</li>
                @foreach ($categories as $category)
                    <li><a href="{{ route('categories.show', $category->id) }}">{{ $category->title }}</a></li>
                @endforeach
            </ul>
        </div>
</div>


<!-- Ultimi Annunci -->

<div class="container">
    <div class="row">
        @foreach($announcements as $announcement)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                   
                    <div class="trend__item">
                        <div class="trend__item__pic">
                            <img src="img/trend/ht-1.jpg" alt="">
                        </div>
                        <div class="trend__item__text">
                            <h6>{{$announcement->title}}</h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">{{$announcement->price}}</div>
                        </div>
                    </div>
                    
                </div>
            </div>
         @endforeach
    </div>
</div>


    <!-- PASSARE I DATI DELLA STRUTTURA IN BASSO A QUELLA SOPRA -->
 

    <!-- <section id="announcementCards">

        <div class="container my-5">
            <div class="row justify-content-center">
            @foreach($announcements as $announcement)
                <div class="col-12 col-md-3">
                    <div class="card " style="width: 18rem;"> 
                   
                    <img src="https://picsum.photos/200/120" class="card-img-top" alt="{{$announcement->title}}">
                    
                        <div class="card-body">
                           
                            <p class=" card-text"> {{$announcement->category->title}}</p>
                            <p class=" card-text">Posted by: {{$announcement->user->name}}</p>
                            <p class=" card-text">€ {{$announcement->price}}</p>
                            
                            <h5 class="card-title">{{$announcement->title}}</h5>
                            
                            <p class="card-text">{!!substr($announcement->description, 0, 20)!!}...</p>
                            <!-- substr($variabile, da carattere , a carattere) -->
                            <!-- <p class=" card-text"> Postato il {{$announcement->created_at->format('d/m/y')}}</p>
                            <div class="col-8 my-2">  
                                <a href="{{route('announcements.show', $announcement->id)}}" class="button-register">In dettaglio</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

    </section>  -->



    <!-- Recenzioni -->
    <section class="discount p-5"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="discount__pic">
                        <img src="/img/recenzioni.png" alt="">
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