<x-layout>

<section id="register" class="bg-auth p-0 mt-5 p-4" style="background-image:url({{ asset ('img/background/bg-auth.png') }});">
        <div class="container p-5 mt-4">
            <div class="row">
                <div class="col-12 offset-3">

    <!-- form recupero password -->
    <form action="/forgot-password" method="post" class="form_main rounded-5">
        @csrf
        <h2 class="text-center">RECUPERA PASSWORD</h2>
        <div class="inputContainer">
        <input type="email" name="email" class="inputField form-control rounded-4" id="email" placeholder="Inserisci la tua email" required>
        </div>
        <input type="submit" class="rounded-4 button-form-login" value="Reset password">
    </form>

    <!-- messaggio stato richiesta recupero password -->
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            <p> {{ session('status') }}</p>
           
        </div>
    @endif
    <!-- messaggi errore se richiesta non va a buon fine
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->

    </div>
    </div>
    </div>
    </section>

</x-layout>
