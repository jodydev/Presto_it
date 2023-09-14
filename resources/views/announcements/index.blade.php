<x-layout>
        <p class="h1 text-center mb-5">
            Tutti gli annunci
        </p>
    
        <form action="{{route('announcements.search')}}" method ="GET" class="d-flex justify-content-center mt-2 mb-5">
    <div class="searchbar">
        <input name="searched" placeholder="Search..." type="text">
        <button type="submit">Go</button>
      </div>    
    </form>
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
 <div class="container">
        <div class="row">
            @forelse ($announcements as $announcement)
                <div class="col-lg-4 col-md-4 col-sm-6 px-5">
                    <div class="trend__content">                  
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
                            </div>
                        </div>
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
        </div> 
        </div>  

    @endforelse

</section>
</x-layout>