<x-layout>

<section id="register" class="bg-auth p-0 mt-5 p-4" style="background-image:url({{ asset ('img/background/bg-auth.png') }});">
        <div class="container p-5 mt-4">
            <div class="row">
                <div class="col-12 offset-3">
   
    <form action="/reset-password" method="post" class="form_main rounded-5">
        @csrf
        <h2 class="text-center">RESET PASSWORD</h2>
        <div class="inputContainer">
        <input type="email" name="email" class="inputField form-control rounded-4" id="email" placeholder="mario.rossi@gmail.com" required>
        </div>
        <div class="inputContainer">       
        <input type="password" name="password" class="inputField form-control rounded-4" id="password" placeholder="Passsword" required>
        </div>
        <div class="inputContainer">       
        <input type="password" name="password_confirmation" class="inputField form-control rounded-4" id="password_confirmation" placeholder="Conferma Passsword" required>
        </div>
        <div class="inputContainer">       
        <input type="hidden" name="token" value="{{request()->route('token')}}">
        </div>
        <input type="submit"  class="rounded-4 button-form-login" value="AGGIORNA PASSWORD">

    </form>
    </div>
    </div>
    </div>

    </section>
</x-layout>