
<x-layout>

<div class="sezione">
            <div class="breadcrumb-option mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb__links">
                                <a href="{{route('index')}}"><i class="fa fa-home"></i> Home</a>
                                <span>Profilo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>

<section id="user" class="vh-200">
  <div class="container h-100 w-100 p-5 mt-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-12 mb-lg-0">
        <div class="card mb- w-100 rounded-4 shadow-lg">
          <div class="row g-0">
            <div class="col-md-4 text-center text-white " style="background-color: black;">
              
            @if(!$user->profile_image)


              <img src="{{asset('img/add-photo.png')}}"class="img-fluid mt-5" style="width: 80px; " />


              @else

              <img src="{{ asset('storage/' . $user->profile_image) }}"class="img-fluid mt-5" style="width: 80px;" />

              @endif

              
              <h2 class="mt-2 fs-2" style="color:#ff5114">Benvenuto,</h2>
              <h3 class="fs-3"> {{ $user->name }}</h3>

              @if ($user->is_revisor)
                  <p class="h-6">Sei già un revisore</p>
              @else
                  <p class="h-6" style="margin: 0px !important; padding: 0px !important;">Non sei un revisore,</p>
                  <a href="{{route('contacts')}}" style="color: #ff5114; font-size: 9px; margin: 0px !important; padding: 0px !important;">Clicca qui per fare richiesta.</a>
              @endif

              <button id="button-edit" class="my-3 text-light fw-bold">Modifica <i class="far fa-edit fa-lg" style="color: #ff5114;"></i></button>

            </div>
            <div class="col-md-8">
                <div class="card-body p-4">

                    <h6 class="fs-1">Informazioni<span>.</span></h6>

                    <hr class="mt-0 mb-4"> 

                    <div class="row pt-1">
                    <div class="col-6 mb-3">
                        <h6>Email</h6>
                        <p class="text-muted">{{ $user->email }}</p>
                    </div>
                    <div class="col-6 mb-3">
                        <h6>Telefono</h6>
                        <p class="text-muted">+39 {{$user->phone_number}}</p>
                    </div>
                    </div>

                    <hr class="mt-0 mb-4">

                    <div class="row pt-1">
                        <div class="col-6 mb-3">
                            <h6>Città</h6>
                            <p class="text-muted">{{$user->city}}</p>
                        </div>
                    <div class="col-6 mb-3">
                        <h6>Indirizzo</h6>
                        <p class="text-muted">{{$user->address}}</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>    
      </div>

      <div class="container contact-form mt-5" id="form-edit">
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="bg-black rounded-4 shadow-lg">
            @csrf
                  @method('PUT')
                <h3 class="fs-2 text-light mt-1">Aggiorna Info<span>.</span></h3>
               <div class="row">
                    <div class="col-md-6 my-3">
                        <div class="form-group">
                          <label for="profile_image" class="form-label text-light">Immagine del Profilo:</label>
                          <input class="form-control" type="file" name="profile_image" id="profile_image">
                        </div>
                        <div class="form-group py-3">
                          <label for="phone_number" class="form-label text-light ">Numero di Telefono:</label>
                          <input class="form-control" type="text" name="phone_number" id="phone_number" value="{{ $user->phone_number }}">
                        </div>
                        <div class="form-group my-3">
                            <button type="submit" class="btn btn-success">Salva Modifiche</button>
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="form-group">
                          <label for="city" class="form-label text-light">Città di Provenienza:</label>
                          <input class="form-control" type="text" name="city" id="city" value="{{ $user->city }}">
                        </div>
                        <div class="form-group my-3">
                          <label for="address" class="form-label text-light ">Indirizzo di Casa:</label>
                          <input class="form-control" type="text" name="address" id="address" value="{{ $user->address }}">
                        </div>
                    </div>
                </div>
            </form>
        </div>
  </div>
</section>

</x-layout>

