<x-layout>
    <section id="annunci-da-revisionare">
        <div class="container p-5 mt-4">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        @if ($announcement_to_accept)
                        <h4>Ecco gli annunci da revisionare</h4>
                        @else
                        <h4>Non ci sono annunci da revisionare</h4>
                        @endif
                    </div>
                </div>
                
            </div>
        </div>

        @if($announcement_to_accept)
        <!-- MODIFICARE ASSOLUTAMENTE IL CAROSELLO PERCHE è VERAMENTE BRUTTO <3 -->
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
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
                            <div class="col-12 col-lg-6 m-5">  
                                <h3 class= "card-title">{{$announcement->title}}</h3>  
                                <p class="card-text">{{$announcement->description}}</p>
                                <p class="card-text">{{$announcement->price}}</p>
                                <p>{{$announcement->category->title }}</p> 
                            </div> 
                        <div>
                    </div>
                </div>
            </div>
        @endif
       <div class="container my-3">
        <div class="row">
        <div class="col-6 me-auto">
                <form action="{{route('revisors.accept')}}" method="post">
                    @method('PATCH')
                    @csrf
                    <input type="submit" value="Accetta" class="button-login">
                </form>

            </div>
            <div class="col-6 ms-auto">
                <form action="{{route('revisors.decline')}}" method="post">
                    @method('PATCH')
                    @csrf
                    <input type="submit" value="Rifiuta" class="button-logout">
                </form>

            </div>
            
        </div>
       </div>
    </section>
    
</x-layout>