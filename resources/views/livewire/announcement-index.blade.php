<section id="annunci">
    <div class="container">
            <div class="row">
                <div class="col-12 myform text-center">
                    <label for="text" class="form-label">Filtra per Titolo</label>
                    <input type="text" wire:model="filter"  class="form-control shadow">
                    <p class="d-none" wire:poll.100ms>{{$filter}}</p>
                    <!-- usare wire:poll per searchbar, anche se non mi è chiaro del tutto il funzionamento -->
                </div>
            </div>
        </div>


        <div class="container mt-5">
            <div class="row">
        
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
                                <div class="col-8 my-2">  
                                    <a href="{{route('announcements.show', $announcement->id)}}" class="button-register">In dettaglio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
