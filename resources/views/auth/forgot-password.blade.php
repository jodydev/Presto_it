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
    
    <!-- form recupero password -->
    <form method="POST" action="/forgot-password" class="form_main rounded-5">
        @csrf

        <h2 class="text-center">RECUPERA PASSWORD</h2>
        <div class="inputContainer">
        <input type="email" name="email" id="email" class="inputField form-control rounded-4" placeholder="Inserisci la tua email" required>
        </div>
        <input class="rounded-4 button-form-login" type="submit" value="Reset password">
    </form>

    


    </div>
    </div>
    </div>
    </section>

</x-layout>
