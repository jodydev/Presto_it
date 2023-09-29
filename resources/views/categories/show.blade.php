@php
    $lang = session('locale');
@endphp
<x-layout>

<section id="categoryCards">

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
            @if($lang == 'it')
            <p class="h2 text-center text-light p-5">Tutti gli annunci della categoria <span class="text-dark fw-semibold">{{$category->title}}</span> </p>
            @elseif($lang =='en')
            <p class="h2 text-center text-light p-5">All announcements of the category <span class="text-dark fw-semibold">{{$category->en}}</span> </p>
            @else
            <p class="h2 text-center text-light p-5">Toutes les annonces pour cette catégorie <span class="text-dark fw-semibold">{{$category->fr}}</span> </p>
            @endif
            
        
        </div>

        <div class="container my-5 p-5">
            <div class="row justify-content-center my-5">
            @php
                $hasAcceptedAnnouncement = false;
            @endphp
            @foreach($category->announcements as $announcement)
            @if($announcement->is_accepted)
            <div class="col-lg-4 col-md-4 col-sm-6 px-5">
                    <div class="trend__content mt-3">                  
                        <div class="trend__item">
                            <div class="trend__item__pic zoom-wrapper">
                            @if($announcement->images->count() > 0)
                                <img src="{{$announcement->images()->first()->getUrl(150, 150)}}" class="img-card-annuncement rounded-4" alt="">
                                @else
                                <img src="{{asset('img/logo/code_geeks.png')}}" class="img-card-annuncement rounded-4" alt="">
                                @endif
                            </div>
                            <div class="trend__item__text">
                                <h6>{{$announcement->title}}</h6>

                             @if($lang == 'it') 
                                <strong>{{$announcement->category->title}}</strong>
                                @elseif($lang == 'en') 
                                <strong>{{$announcement->category->en}}</strong>
                                @else 
                                <strong>{{$announcement->category->fr}}</strong>
                                @endif
                                <div class="rating">
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                </div>
                                <div class="product__price">€{{$announcement->price}}</div>
                                <a href="{{route('announcements.show', $announcement->id)}}">{{__('traduzioni.Scopri!')}}</a>
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

        
            <div class="h3 text-center text-dark p-5">
                    <div class="alert">
                        <p class="lead">{{__('traduzioni.NoAnn')}} <br> {{__('traduzioni.Torna')}}</p>
                    </div>
            </div>
            @endif

            </div>
        </div>

    </section>
</x-layout>