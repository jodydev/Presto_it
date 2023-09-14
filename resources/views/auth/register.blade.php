<x-layout>


@if ($errors->any())
    <div class="alert alert-danger my-5">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<section id="register" class="bg-auth p-0" style="background-image:url({{ asset ('img/background/bg-auth.png') }});">

    <div class="container p-5 mt-5" >
        <div class="row mt-5">
            <div id="text" class="col-lg-6">
            
                    <h1 class="fs-6 text-light" >Presto.it</h1>  
                    
                    <h2>Iscriviti al nostro sito e pubblica il tuo primo annuncio</h2>

                    <span>+39 333-696969 <br> presto.it@gmail.com</span>
              
            
            
            </div>

            <div class="col-lg-6">


            <form action="/register" method="post" class="form_main_register form-main rounded-5" >

            @csrf

                <h1 class="text-center text-dark fs-1 fw-bold">REGISTRATI</h1>
                <div class="inputContainer">
                    
                <input type="text" name="name" id="nameRegister" class="inputField form-control rounded-4" placeholder=" Inserisci Nome e Cognome">
                </div>
                
                <div class="inputContainer">
                   
                <input type="email" name="email" id="emailRegister" class="inputField form-control rounded-4" placeholder=" Inserisci la tua email">
                </div>

            <div class="inputContainer">
               
                <input type="password" name="password" id="passwordRegister" class="inputField form-control rounded-4" placeholder=" Inserisci la tua password">
            </div>

            <div class="inputContainer">
                
                <input  type="password" name="password_confirmation" id="password_confirmationRegister" class="inputField form-control rounded-4" placeholder=" Conferma la tua password">
            </div>
                        
                    
            <input type="submit" id="button" class="rounded-4 button-form-register" value="Registrati"/>

            <a class="text-dark mt-3" href="/login">Hai già un'account? Accedi.</a>

            </form>


                        
            </div>
        </div>
    </div>
</section>


</x-layout>