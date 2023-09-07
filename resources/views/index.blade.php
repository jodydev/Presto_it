<x-layout>
<br>
<br>
<br>
<br>
<br>
  @if(auth->user())
<a href="{{route('announcements.create')}}"><button class="button-create" role="button" class= "my-auto"><i class="fa-solid fa-right-to-bracket" style="color: #000000;"></i> Crea Annuncio</button></a>
    @endif
</x-layout>