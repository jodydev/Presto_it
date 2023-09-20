<form action="{{route('set_language_locale',$lang)}}" method="post">
    @csrf
    <button type="submit" class="nav-link" style='background-color:transparent,border:none;'>
      {{$slot}}  
    </button>
</form>