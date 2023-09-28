<x-layout>

<section>
    <div class="sezione">
        <div class="breadcrumb-option mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}"><i class="fa fa-home"></i> Home</a>
                            <span>Contatti</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6" >
                    <div class="contact__content">
                        <div class="contact__address" transition-style="in:wipe:right">

                            <div class="section-title">
                                <h4>Info di Contatto</h4>
                            </div>

                            <ul>
                                <li>
                                    <h6><i class="fa fa-map-marker" style="color: #ff5114;"></i> Indirizzo</h6>
                                    <p>Strada S. Giorgio Martire, 2D, 70124 Bari BA</p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-phone" style="color: #ff5114;"></i> Telefono</h6>
                                    <p><span>+39 </span><span class="text-dark">333-696969</span></p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-headphones" style="color: #ff5114;"></i> Email</h6>
                                    <p>info@presto.it</p>
                                </li>
                            </ul>

                        </div>

                        <div class="contact__form rounded-4 p-5" transition-style="in:wipe:up" style="background-color:black;">
                            <h5 class="fs-3 text-light">Fai richiesta per <br> diventare revisore<span style="color: #ff5114;">.</span> </h5>
                            @if(!Auth::check())
                            <form action="#">
                                
                                <input type="text" name="name" placeholder="Nome e Cognome">
                                <input type="email" name="email"placeholder="Indirizzo email">
                                <textarea name="user_message" placeholder="Messaggio"></textarea>

                                <p class="my-5 fs-4" style="color: #ff5114;"> <a style="color: #ff5114;" href="/register">Registrati per diventare revisore.</a></p>                            
                            </form>
                            
                            @else
                            <form method="POST" action="{{route('become.revisor')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="name" placeholder="Nome e Cognome" value="{{auth()->user()->name}}">
                                <input type="email" name="email"placeholder="Indirizzo email" value="{{auth()->user()->email}}">
                                <textarea name="user_message" placeholder="Messaggio"></textarea>
                                <!-- Input per il file PDF -->

                                <label for="file" class="form-label text-light">Inserisci il tuo cv in formato pdf</label>
                                <input type="file" name="pdf_file" accept=".pdf" class="form-control shadow-lg rounded-4" style="padding: 15px !important; ">
                                @if(!auth()->user()->is_revisor)
                                <button type="submit" class="rounded-4 px-3 shadow-lg button-form-contatti">Invia</button>
                                @else
                                <p class="my-5 fs-3" style="color: #ff5114;">Sei già un Revisore.</p>
                                @endif
                            </form>
                            
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" transition-style="in:wipe:up">
                    <div class="contact__map shadow-lg">
                        <div style="width: 100%"><iframe width="100%" height="800" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Gra%20Strada%20S.%20Giorgio%20Martire,%202D,%2070124%20Bari%20BA%20%20%20+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/population/">Population mapping</a></iframe></div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

</x-layout>