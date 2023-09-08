<!-- Header Section Begin -->
<header class="header">
        <div class="container-fluid">
            <div class="row fixed-top bg-nav">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" class="logo" alt=""></a>
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
                            <li><a href="">Contatti</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        @if(!auth()->user())
                       <a href="/login"> <button class=" button-login" role="button"><i class="fa-solid fa-user" style="color: #000000;"></i> Accedi</button></a>
                        <a href="/register"><button class=" button-register" role="button"><i class="fa-solid fa-right-to-bracket" style="color: #000000;"></i> Registrati</button></a>
                        @else
                        <form action="/logout" method="post">
                            @csrf
                            <input type="submit" value="logout" class=" button-login">
                        </form>
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