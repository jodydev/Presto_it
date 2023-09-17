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
                            <li class="active"><a href="{{route('index')}}">Home</a></li>
                            <li><a href="">Categorie</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('announcements.index')}}">Tutte le Categorie</a></li>
                                    @foreach ($categories as $category)
                                        <li><a href="{{route('categories.show', $category->id)}}">{{$category->title}}</a></li>
                                    @endforeach    
                                </ul>
                            </li>
                            <li><a href="/contatti">Contatti</a></li>
                            @if  (auth()->check() && auth()->user()->is_revisor)
                            <li>
                                <!-- se il count è zero tolgo il badge -->
                                <a href="{{ route('revisors.index') }}">Zona Revisore  
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
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        @if(!auth()->user())

<<<<<<< HEAD
                        <button class=" button-login" role="button"><a href="/login"><i class="fa-solid fa-user" style="color: #000000;"></i> Accedi</a></button>
                        <button class=" button-register" role="button" style="color: #ff5114;><a href="/register"><i class="fa-solid fa-right-to-bracket" style="color: #ff5114;"></i> Registrati</a></button>
=======
                        <button class="button-login" onclick="goLogin()" role="button"><i class="fa-solid fa-user" style="color: #000000;"></i> Accedi</button>
                        <button class=" button-register" onclick="goRegister()" role="button"><i class="fa-solid fa-right-to-bracket" style="color: #000000;"></i> Registrati</button>
>>>>>>> 8fc92ea365fe812aa1a5d945b79aa51eb565542d
                       
                        @else
                        
                        
                        <div id="create-btn" class="d-flex">

                        <a href="{{route('announcements.create')}}" class="button-create">Crea un Annuncio</a>
                            
                            
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
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
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