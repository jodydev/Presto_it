<x-layout>

<section id="register" class="bg-auth p-0 mt-5 p-4" style="background-image:url({{ asset ('img/background/bg-auth.png') }});">
        <div class="container p-5 mt-4">
            <div class="row">
                <div class="col-12 offset-3">
   
        <!-- messaggio che indica lo stato del recupero password -->
        @if(session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            <p>{{session('status')}}</p>
        </div>
        @endif  

    <form method="POST" action="/reset-password" class="form_main rounded-5">
        @csrf
        
        <input type="hidden" name="token" value="{{request()->route('token')}}">

        <h2 class="text-center">RESET PASSWORD</h2>
        <div class="inputContainer">
        <input type="email" name="email" id="email" placeholder="mario.rossi@gmail.com" class="inputField form-control rounded-4 @error('email') 
        is-invalid @enderror value="{{$request->email}}"/>
        </div>

        <div class="inputContainer">       
        <input type="password" name="password"  id="password" placeholder="Passsword" required class="inputField form-control rounded-4
        @error('password') is-invalid @enderror" />
        </div>
        
        <div class="inputContainer">       
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Conferma Passsword" required 
        class="inputField form-control rounded-4 @error('password_confirmation') is-invalid @enderror" />
        </div>
        
        <div class="inputContainer">       
        
        </div>
        <input type="submit"  class="rounded-4 button-form-login" value="AGGIORNA PASSWORD">

    </form>
    </div>
    </div>
    </div>

    </section>
</x-layout>