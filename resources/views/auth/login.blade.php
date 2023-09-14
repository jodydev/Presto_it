<x-layout>

<section id="register" class="bg-auth p-0 mt-5 p-4" style="background-image:url({{ asset ('img/background/bg-auth.png') }});">
    <div class="container p-5 mt-4">
        <div class="row">
            <div class="col-12 offset-3">

                <form action="/login" method="post" class="form_main rounded-5" >

                @csrf
                
                    <h1 class="text-center">ACCEDI</h1>
                    <div class="inputContainer">
                

                    <svg class="inputIcon ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2e2e2e" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                    </svg>
                    <input type="email" name="email" class="inputField form-control rounded-4" id="email" placeholder=" Inserisci la tua email">
                    </div>
                    
                <div class="inputContainer">
                    <svg class="inputIcon ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2e2e2e" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                    </svg>
                    <input type="password" name="password" class="inputField form-control rounded-4" id="password" placeholder=" Inserisci la tua password">
                </div>
                            
                        
                <input type="submit" class="rounded-4 button-form-login" value="Accedi"/>

                <a class="text-dark mt-3" href="/register">Sei nuovo? Registrati.</a>
            
                
                </form>
                
            </div>
        </div>
    </div>
</section>



</x-layout>



