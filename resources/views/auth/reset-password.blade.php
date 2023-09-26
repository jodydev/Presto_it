<x-layout>

<section id="register" class="bg-auth" style="background-image:url({{ asset ('img/background/bg-create.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">


    <div class="container">
        <div class="row">
            <div class="col-12 py-5 my-5">
    <form method="POST" action="/reset-password" class="form_main_login rounded-5">
        @csrf
        
        <input type="hidden" name="token" value="{{request()->route('token')}}">

        <h2 class="text-center">RESET PASSWORD<span style="color: #ff5114">.</span></h2>
        
        <div class="inputContainer mt-5">
        <input type="email" name="email" placeholder="Inserisci la tua email" id="email" class="inputField form-control rounded-4 w-lg-50" @error('email') 
        is-invalid @enderror value="{{$request->email}}"/>
        </div>
        
        <div class="inputContainer">       
        <input type="password" name="password" id="password" placeholder="Passsword" class="inputField form-control rounded-4 w-lg-50
        @error('password') is-invalid @enderror" />
        </div>
        
        <div class="inputContainer">       
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Conferma Passsword" required 
        class="inputField form-control rounded-4 w-lg-50 @error('password_confirmation') is-invalid @enderror"/>
        </div>
        
        <div class="inputContainer">       
        </div>
        <input class="rounded-4 button-form-login mt-5" type="submit" value="Aggiorna password">

    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </section>
</x-layout>