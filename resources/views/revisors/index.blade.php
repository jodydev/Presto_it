<x-layout>
    <section id="annunci-da-revisionare">
        <div class="container p-3 mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title p-5">
                        @if ($announcement->user_id !== auth()->user()->id)
                        <h4>Ecco gli annunci da revisionare</h4>
                        @elseif ($announcement->user_id == auth()->user()->id )
                        <h4>Ci dispiace ma non puoi revisionare i tuoi stessi annunci, <br> attendi con pazienza un tuo collega</h4>
                        @else
                        <h4>Non ci sono annunci da revisionare</h4>
                        @endif
                    </div>
                </div>
                
            </div>
        </div>

        @if($announcement && $announcement->user_id !== auth()->user()->id)
        <!-- MODIFICARE ASSOLUTAMENTE IL CAROSELLO PERCHE è VERAMENTE BRUTTO <3 -->
        
        <div id="details_revisore">
        <div class="card mb-5">
        <div class="row">
        <div class="col-sm-12 col-md-4 border-right pr-0">
            <div class="photo">
            <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner rounded-4">
            <div class="carousel-item active">
            <img src="https://picsum.photos/seed/picsum/200/200" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://picsum.photos/seed/picsum/200/200" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://picsum.photos/seed/picsum/200/00" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-8">
            <div class="description">
            <h2 class= "card-title">{{$announcement->title}}</h2>
            <h4 class= "card-text">{{$announcement->category->title }}</h4>
            <h2 class= "card-text mt-2">€ {{$announcement->price}}</h1>
            <p class= "card-text">{{$announcement->description}}</p2>
            </div>
            <div class="container my-3">
            <div class="row">
                <div class="col-6 ms-auto">
                    <form action="{{route('revisors.accept', $announcement)}}" method="post">
                        @method('PATCH')
                        @csrf
                        <input type="submit" value="Accetta" class="button-login">
                    </form>
                </div>
                <div class="col-6 me-auto">
                    <form action="{{route('revisors.decline', $announcement)}}" method="post">
                        @method('PATCH')
                        @csrf
                        <input type="submit" value="Rifiuta" class="button-logout">
                    </form>
                </div>
                
            </div>
        </div>
        


</div>

</div>

</div>

            <!-- <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 m-auto">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://picsum.photos/seed/picsum/200/300" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/seed/picsum/200/300" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/seed/picsum/200/300" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            </div>
                        </div> 
                            <div class="col-12 col-lg-6 m-auto">  
                                <h3 class= "card-title">{{$announcement->title}}</h3>  
                                <p class="card-text">{{$announcement->description}}</p>
                                <p class="card-text">€{{$announcement->price}}</p>
                                <p>{{$announcement->category->title }}</p> 
                            </div> 
                        <div>
                    </div>
                </div>
            </div>
        -->
       <!-- <div class="container my-3">
            <div class="row">
                <div class="col-6 ms-auto">
                    <form action="{{route('revisors.accept', $announcement)}}" method="post">
                        @method('PATCH')
                        @csrf
                        <input type="submit" value="Accetta" class="button-login">
                    </form>
                </div>
                <div class="col-6 me-auto">
                    <form action="{{route('revisors.decline', $announcement)}}" method="post">
                        @method('PATCH')
                        @csrf
                        <input type="submit" value="Rifiuta" class="button-logout">
                    </form>
                </div>
                
            </div>
        </div> -->
        @endif
    </section>
    
</x-layout>