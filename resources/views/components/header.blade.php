        <nav class="navbar navbar-expand-lg sticky-top" >
            <div class="container-fluid">
                    <div class="header__logo">
                        <a href="/"><img src="{{asset('img/logo/logo.png')}}" class="logo" alt=""></a>
                    </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-lg fa-bars" style="color: #ff5114;"></i>

               

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="text-center fs-1 me-auto ms-auto mb-3">           
                          <li class="active"><a href="{{route('index')}}">Home</a></li>
                          <li><p class="a">{{__('traduzioni.Categorie')}}</p>
                              <ul class="dropdown">
                                  <li><a href="{{route('announcements.index')}}">{{__('traduzioni.AllCategory')}}</a></li>
                                  @foreach ($categories as $category)
                                      <li><a href="{{route('categories.show', $category->id)}}">{{$category->title}}</a></li>
                                  @endforeach    
                              </ul>
                          </li>

                          <li><a href="/contatti">{{__('traduzioni.Contatti')}}</a></li>
                          
                          <li><a>{{__('traduzioni.SelectLang')}}</a>
                              <ul class="dropdown">
                                  <x-_locale lang='it'></x-_locale>
                                  <x-_locale lang='en'></x-_locale>
                                  <x-_locale lang='fr'></x-_locale>
                              </ul>
                          </li>

                          @if  (auth()->check() && auth()->user()->is_revisor)
                            <li>                                                
                                <a href="{{ route('revisors.index') }}">{{__('traduzioni.ZonaRevisore')}}  
                                    @php
                                    $toBeRevisionedCount = App\Models\Announcement::toBeRevisionedCount();
                                    @endphp
                                    @if ($toBeRevisionedCount > 0)
                                    <span class="badge bg-danger text-white rounded-pill">
                                        {{ $toBeRevisionedCount }} 
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                    @endif
                                </a>
                            </li>      
                            
                            <li>
                                <a href="{{ route('profile') }}">Il Mio Profilo</a>
                            </li>
                          @endif
                         
                          
                      </ul>

                    <form id="button-header" class="d-flex justify-content-center" role="search">

                        @if(!auth()->user())
                        
                        <button class=" button-login" role="button"><a href="/login" style="color: #000000;"><i class="fa-solid fa-user" style="color: #000000;"></i> {{__('traduzioni.Accedi')}}</a></button>
                        <button class=" button-register" role="button" ><a href="/register" style="color: #ff5114;"><i class="fa-solid fa-right-to-bracket" style="color: #ff5114;"></i> {{__('traduzioni.Registrati')}}</a></button>
                       
                        @else                      
                        
                            <div id="create-btn" class="d-flex me-3">

                                <a href="{{route('announcements.create')}}" class="button-create"><i class="fa-solid fa-pen-to-square fa-shake fa-lg" style="color: #ff5114;"></i> Crea un Annuncio</a>
                                
                                
                                <form action="/logout" method="post" >

                                        @csrf
                                                                        
                                        <input type="submit" value="Logout" class="button-logout">

                                </form>

                            </div>
                        
                        @endif

                    </form>
                </div>
            </div>
        </nav>



<script>
    function goLogin () {
        window.location.href = "/login";
    }

    function goRegister () {
        window.location.href = "/register";
    }
</script>


