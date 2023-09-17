<x-layout>

<section id="categoryCards" class="mt-5">
<<<<<<< HEAD

        <div class="sezione">
            <div class="breadcrumb-option mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb__links">
                                <a href="{{route('index')}}"><i class="fa fa-home"></i> Home</a>
                                <span>{{$category->title}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
`
        <div class="mt-5 bg-orange">

            <p class="h2 text-center text-light p-5">Tutti gli annunci della categoria <span class="text-dark fw-semibold">{{$category->title}}.</span> </p>

        </div>

        <div class="container my-5 p-5">
=======
        <p class="h1 text-center mt-5">
            {{$category->title}}
        </p>
        <div class="container my-5">
>>>>>>> 8fc92ea365fe812aa1a5d945b79aa51eb565542d
            <div class="row justify-content-center my-5">
            @php
                $hasAcceptedAnnouncement = false;
            @endphp
            @foreach($category->announcements as $announcement)
            @if($announcement->is_accepted)
            <div class="col-lg-4 col-md-4 col-sm-6 px-5">
                    <div class="trend__content mt-3">                  
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://picsum.photos/100/100" class="img-card-annuncement rounded-4" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>{{$announcement->title}}</h6>
                                <strong>{{$announcement->category->title}}</strong>
                                <div class="rating">
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                </div>
                                <div class="product__price">€{{$announcement->price}}</div>
                                <a href="{{route('announcements.show', $announcement->id)}}">Scopri!</a>
                                <small>{{$announcement->created_at->format('d/m/y')}}</small>
                            </div>
                        </div>
                        </div>
                </div>
                
                @php
                    $hasAcceptedAnnouncement = true;
                @endphp
                @endif
               
            @endforeach

            @if(!$hasAcceptedAnnouncement)
                <div class="col-12 p-5">
                    <div class="alert">
                        <p class="lead">Al momento non ci sono annunci per questa ricerca. Riprova più tardi.</p>
                    </div>
                </div>
            @endif

            </div>
        </div>

    </section>
</x-layout>