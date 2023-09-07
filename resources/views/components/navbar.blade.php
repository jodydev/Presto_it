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
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="">Categorie</a>
                                <ul class="dropdown">
                                    <li><a href="">Motori</a></li>
                                    <li><a href="">Abbigliamento</a></li>
                                    <li><a href="">Elettronica</a></li>
                                    <li><a href="">Casa</a></li>
                                </ul>
                            </li>
                            <li><a href="">Contatti</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                       <a href="/login"> <button class=" button-login" role="button"><i class="fa-solid fa-user" style="color: #000000;"></i> Accedi</button></a>
                        <a href="/register"><button class=" button-register" role="button"><i class="fa-solid fa-right-to-bracket" style="color: #000000;"></i> Registrati</button></a>

                        <form action="/logout" method="post">
                            @csrf
                            <input type="submit" value="logout">
                        </form>

                    </div>
                </div>
            </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>