<!-- Header Section -->
<header class="header">
        <div class="container-fluid">
            <div class="row fixed-top bg-nav">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="/"><img src="{{asset('img/logo/logo.png')}}" class="logo" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul class="text-center fs-1">
                            <!-- <nav-item><x-_locale lang='it'>IT</x-_locale></nav-item>
                            <nav-item><x-_locale lang='en'>EN</x-_locale></nav-item>
                            <nav-item><x-_locale lang='fr'>FR</x-_locale></nav-item>  -->
                            <li class="active"><a href="{{route('index')}}">Home</a></li>
                            <li><a href="">{{__('traduzioni.Categorie')}}</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('announcements.index')}}">{{__('traduzioni.AllCategory')}}</a></li>
                                    @foreach ($categories as $category)
                                        <li><a href="{{route('categories.show', $category->id)}}">{{$category->title}}</a></li>
                                    @endforeach    
                                </ul>
                            </li>
                            
                           
                            

                            <li><a href="/contatti">{{__('traduzioni.Contatti')}}</a></li>
                            @if  (auth()->check() && auth()->user()->is_revisor)
                            <li>
                                
                                <!-- se il count è zero tolgo il badge -->
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
                            @endif

                           
                            <li><a>{{__('traduzioni.SelectLang')}}</a>
                                <ul class="dropdown">
                                    <x-_locale lang='it'></x-_locale>
                                    <x-_locale lang='en'></x-_locale>
                                    <x-_locale lang='fr'></x-_locale>

                                    <!-- <li><a href=""><img width="20" height="20" src="https://img.icons8.com/color/15/italy-circular.png" alt="italy-circular"> Italiano</a></li>
                                    <li><a href=""><img width="20" height="20" src="https://img.icons8.com/color/20/great-britain-circular.png" alt="great-britain-circular"/> English</a></li>
                                    <li><a href=""><img width="20" height="20" src="https://img.icons8.com/color/20/france-circular.png" alt="france-circular"/> Français</a></li> -->
                                </ul>
                            </li>

                     
       
                        </ul>
                    </ul>
                        

                    </nav>
                    
                    
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        @if(!auth()->user())
                        

                      
                        
                        <button class=" button-login" role="button"><a href="/login" style="color: #000000;"><i class="fa-solid fa-user" style="color: #000000;"></i> {{__('traduzioni.Accedi')}}</a></button>
                        <button class=" button-register" role="button" ><a href="/register" style="color: #ff5114;"><i class="fa-solid fa-right-to-bracket" style="color: #ff5114;"></i> {{__('traduzioni.Registrati')}}</a></button>
                       
                        @else
                        
                        
                        <div id="create-btn" class="d-flex">

                             <a href="{{route('announcements.create')}}" class="button-create"><i class="fa-solid fa-pen-to-square fa-shake fa-lg" style="color: #ff5114;"></i> Crea un Annuncio</a>
                            
                            
                            <form action="/logout" method="post">
                                    @csrf
                                    
                                    <input type="submit" value="Logout" class="button-logout">
                            </form>

                           

                        </div>
                            
                   
                        @endif


                    </div>
                </div>
            </div>
            </div>
        </div>
    </header>

<script>
    function goLogin () {
        window.location.href = "/login";
    }

    function goRegister () {
        window.location.href = "/register";
    }
</script>


