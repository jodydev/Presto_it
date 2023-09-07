<x-layout>
<br>
<br>
<br>
<br>
<br>
  @if(auth()->user())
<a href="{{route('announcements.create')}}"><button class="button-create" role="button" class= "my-auto"><i class="fa-solid fa-right-to-bracket" style="color: #000000;"></i> Crea Annuncio</button></a>
    @endif

   @foreach ($announcements as $announcement)
   <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">

  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$announcement->title}}</li>
    <li class="list-group-item">{{$announcement->category}}</li>
    <li class="list-group-item">{{$announcement->price}}</li>
    <li class="list-group-item">{{$announcement->description}}</li>
  </ul>
  </div>
</div>
   @endforeach

</x-layout>