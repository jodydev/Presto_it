<x-layout>
    <br><br><br><br>
<section id="categoryCards" class="mt-5">
        <p class="h1 text-center mt-5">
            Tutti gli annunci della categoria: {{$category->title}}
        </p>
        <div class="container my-5">
            <div class="row justify-content-center my-5">
                
            @foreach($category->announcements as $announcement)
            @if($announcement->is_accepted)
                <div class="col-12 col-md-3">
                    <div class="card " style="width: 18rem;"> 
                   
                    <img src="https://picsum.photos/200/120" class="card-img-top" alt="{{$announcement->title}}">
                    
                        <div class="card-body">
                           
                            
                            <p class=" card-text">Posted by: {{$announcement->user->name}}</p>
                            <p class=" card-text">€ {{$announcement->price}}</p>
                            
                            <h5 class="card-title">{{$announcement->title}}</h5>
                            
                            <p class="card-text">{!!substr($announcement->description, 0, 20)!!}...</p>
                            <!-- substr($variabile, da carattere , a carattere) -->
                            <div class="col-8 my-2">  
                                <a href="{{route('announcements.show', $announcement->id)}}" class="button-register">In dettaglio</a>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="container">
                    <div class="row">
                        <div class="col-12 mt-5 text-center">
                            <h3>Non ci sono annunci per questa categoria</h3>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            </div>
        </div>

    </section>
</x-layout>