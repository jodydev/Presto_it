<x-layout>

<section>

    <div class="sezione">
            <div class="breadcrumb-option mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb__links">
                                <a href="{{route('index')}}"><i class="fa fa-home"></i> Home</a>
                                <span>Tutte le categorie</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
    <div class="mt-5 p-5 bg-orange">

        <p class="h2 text-center text-light mt-5" transition-style="in:wipe:right">{{__('traduzioni.CercaC')}}</p>

        <form action="{{route('announcements.search')}}" method ="GET" class="d-flex justify-content-center my-5">
            <div class="searchbar">
                <input name="searched" placeholder="T-shirt, Tablet, Moto..." type="text">
                <button type="submit">{{__('traduzioni.Cerca')}}</button>
            </div>    
         </form>

    </div>
       
    
        
        <!-- OLD 12set2023 @forelse ($announcements as $announcement)

                        <div class="col-6">  
                            <div class="mb-3"><h1>{{$announcement->title}}
                            </h1></div>
                            <br>
                             <div-container>
                            <h3 class= "card-title">{{$announcement->title}}</h3>  
                              <p class="card-text">{{$announcement->description}}</p>
                              <p class="card-text">{{$announcement->price}}</p>

                              <p>{{$announcement->category->title }}</p> 
        

                            </div-container> 
                         </div>
                        

                         </div>

                         @empty

                         <div class="col-12">
                            <div class="alert">
                                <p class="lead">
                                    Non ci sono annunci per questa ricerca!!! ):
                                </p>
                            </div>
                         </div>
           


        @endforelse
 -->

 <!-- CARD ELENCO ANNUNCI -->
 <div class="container p-5">
        <div class="row">
            @forelse ($announcements as $announcement)
                <div class="col-lg-4 col-md-4 col-sm-6 px-5">
                    <div class="trend__content mt-3">                  
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                @if($announcement->images->count() > 0)
                                <img src="{{$announcement->images()->first()->getUrl(150, 150)}}" class="img-card-annuncement rounded-4" alt="">
                                @else
                                <img src="{{asset('img/logo/code_geeks.png')}}" class="img-card-annuncement rounded-4" alt="">
                                @endif
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
                                <a href="{{route('announcements.show', $announcement->id)}}"></a>
                                <small>{{$announcement->created_at->format('d/m/y')}}</small>
                            </div>
                        </div>
                        </div>
                        
                </div>

            
                    
                @empty    

                <div class="h3 text-center text-dark p-5" transition-style="in:wipe:right">
                    <div class="alert">
                        <p class="lead">{{__('traduzioni.NoAnn')}}<br>{{__('traduzioni.Riprova')}}</p>
                    </div>
                 </div>

        </div> 
        </div>  

    @endforelse
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pagination justify-content-center">
                    {{ $announcements->render() }}
                </div>
            </div>
        </div>
    </div>
                    
                

</section>
</x-layout>