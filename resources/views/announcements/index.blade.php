<x-layout>
    <br><br><br><br><br>
    <form action="{{route('announcements.search')}}" method ="GET" class="d-flex">
      <input name="searched" pclass="form-control me-2" type="search" placeholder="Search" aria-label="Search">
       <button class= "btn btn-outline-success" type="submit">Search</button>

    </form>
<section id="announcementCards">
        <p class="h1 text-center">
            Tutti gli annunci
        </p>
        @forelse ($announcements as $announcement)

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

        




</section>
</x-layout>