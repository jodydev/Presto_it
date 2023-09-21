<form action="{{route('set_language_locale',$lang)}}" method="post">
    @csrf
    <button type="submit" class="nav-link" style='background-color:transparent,border:none;'>
    @if ($lang == 'it')
      <li><a href=""><img width="20" height="20" src="https://img.icons8.com/color/15/italy-circular.png" alt="italy-circular"> Italiano</a></li> 
    @elseif ($lang == 'en')
      <li><a href=""><img width="20" height="20" src="https://img.icons8.com/color/20/great-britain-circular.png" alt="great-britain-circular"/> English</a></li>
    @else
      <li><a href=""><img width="20" height="20" src="https://img.icons8.com/color/20/france-circular.png" alt="france-circular"/> Français</a></li> 
    @endif
    </button>


</form>