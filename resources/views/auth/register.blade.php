<x-layout>



<section id="register" class="bg-auth p-0" style="background-image:url({{ asset ('img/background/bg-create.png') }});">

    <div class="container" >
        <div class="row">
            <div id="text" class="col-lg-6">
     
                    
                    <h2 class="my-5" transition-style="in:wipe:right">Iscriviti al nostro sito e pubblica subito il tuo primo annuncio!</h2>

                    <img src="{{ asset ('img/storyset/register.png') }}" transition-style="in:wipe:right">
              
            
            
            </div>

            <div class="col-lg-6 p-5">


            <form action="/register" method="post" class="my-5 form_main_register form-main rounded-5" transition-style="in:wipe:left">

            @csrf

                <h1 class="text-center fw-semibold fs-1 my-5">REGISTRATI<span style="color: #ff5114">.</span></h1>

                <div class="inputContainer">
                    
                <svg xmlns="http://www.w3.org/2000/svg" class="inputIcon ms-2" height="16" viewBox="0 0 448 512"><style>svg{fill:#000000}</style>
                <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                </svg>

                <input type="text" name="name" id="nameRegister" class="inputField form-control rounded-4" placeholder=" Nome e Cognome" required>

                </div>
                
                <div class="inputContainer">
                
                <svg class="inputIcon ms-2" viewBox="0 0 8 6" xmlns="http://www.w3.org/2000/svg">
	            <path d="m0 0h8v6h-8zm.75 .75v4.5h6.5v-4.5zM0 0l4 3 4-3v1l-4 3-4-3z"/>
                </svg>

                <input type="email" name="email" id="emailRegister" class="inputField form-control rounded-4" placeholder=" Email" required>
                </div>

            <div class="inputContainer">
               
                <svg class="inputIcon ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2e2e2e" viewBox="0 0 16 16">
                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                </svg>

                <input type="password" name="password" id="passwordRegister" class="inputField form-control rounded-4" placeholder=" Password" required>
            </div>

            <div class="inputContainer">
                

                <svg class="inputIcon ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2e2e2e" viewBox="0 0 16 16">
                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                </svg>

                <input  type="password" name="password_confirmation" id="password_confirmationRegister" class="inputField form-control rounded-4" placeholder=" Conferma password" required>

            </div>
            <div class="form-group d-flex justify-content-center mt-3">                
            <label for="privacy_policy" class= "col-12 d-flex align-items-baseline">
            <input type="checkbox" name="privacy_policy" id="privacy_policy" value="1" required>
            <div class="ms-2" style= "font-size:12px">
                        <div>
                            Accetto i termini d'uso e la normativa sul trattamento dei dati personali  <a href="/privacy" style="font-size: 12px !important; padding: 0px !important;">Normativa sulla privacy</a>
                        </div>

                    </div>
            </label>      
            </div> 
            <input type="submit" id="button" class="rounded-4 button-form-register" value="Registrati"/>

            <a class="text-dark mt-3" href="/login">Hai già un'account? Accedi.</a>

            </form>


                        
            </div>
        </div>
    </div>
</section>


</x-layout>