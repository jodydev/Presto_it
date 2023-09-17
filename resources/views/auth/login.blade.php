<x-layout>

<section id="register" class="bg-auth p-0 mt-5 p-4" style="background-image:url({{ asset ('img/background/bg-create.png') }});">
    <div class="container p-5">
        <div class="row">
            <div id="text" class="col-lg-6">
        
                        
                <h2 class="">Bentornato!<br>Ci sei mancato.</h2>
                
                <img src="{{ asset ('img/storyset/login.png') }}" class="" alt="" srcset="">
                
            </div>

            <div class="col-lg-6 p-5 my-5">

                <form action="/login" method="post" class="form_main_login rounded-5">

                @csrf
                
                    <h1 class="text-center my-5 fs-1 fw-semibold">ACCEDI<span style="color: #ff5114">.</span></h1>

                    <div class="inputContainer">
                
                        <svg class="inputIcon ms-2" viewBox="0 0 8 6" xmlns="http://www.w3.org/2000/svg">
                        <path d="m0 0h8v6h-8zm.75 .75v4.5h6.5v-4.5zM0 0l4 3 4-3v1l-4 3-4-3z"/>
                        </svg>

                        <input type="email" name="email" class="inputField form-control rounded-4" id="email" placeholder=" Inserisci la tua email">

<<<<<<< HEAD
=======
                    <svg class="inputIcon ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2e2e2e" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                    </svg>
                    <input type="email" name="email" class="inputField form-control rounded-4" id="email" placeholder=" Inserisci la tua email" required>
>>>>>>> 8fc92ea365fe812aa1a5d945b79aa51eb565542d
                    </div>
                        
                    <div class="inputContainer">
                        
                        <svg class="inputIcon ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2e2e2e" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                        </svg>

                        <input type="password" name="password" class="inputField form-control rounded-4" id="password" placeholder=" Inserisci la tua password">
                    
<<<<<<< HEAD
                    </div>
=======
                <div class="inputContainer">
                    <svg class="inputIcon ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2e2e2e" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                    </svg>
                    <input type="password" name="password" class="inputField form-control rounded-4" id="password" placeholder=" Inserisci la tua password" required>
                </div>
>>>>>>> 8fc92ea365fe812aa1a5d945b79aa51eb565542d
                            
                        
                    <input type="submit" class="rounded-4 button-form-login" value="Accedi"/>

                    <a class="text-dark mt-3" href="/register">Sei nuovo? Registrati.</a>
            
                </form>
                
            </div>
        </div>
    </div>
</section>



</x-layout>



