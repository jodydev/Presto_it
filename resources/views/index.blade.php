<x-layout>
<br>
<br>
<br>
<br>
<br>
  @if(auth()->user())
<a href="{{route('announcements.create')}}" class=" button-login">Crea un Annuncio</a>
    @endif

    <section id="announcementCards">
        <p class="h1 text-center">
            Gli ultimi annunci
        </p>
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
                            <p class=" card-text"> Postato il {{$announcement->created_at->format('d/m/y')}}</p>
                            <div class="col-8 my-2">  
                                <a href="{{route('announcements.show', $announcement->id)}}" class="button-register">In dettaglio</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

    </section>
</x-layout>