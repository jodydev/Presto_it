<section class="p-5 mt-5">

    <div class="alert mt-5 fixed-top">
        
        <p class="text-success p-2 h4">{{$message}}</p>
    
      
    </div>

    <div class="container-fluid mt-5 ">
        <div class="row">

                 
                <div id="text" class="col-lg-6">
            
                    
                    
                    <h3>Iscriviti al nostro sito e <br> pubblica il tuo primo annuncio.</h3>

                    <img src="{{ asset ('img/storyset/register.png') }}" alt="" srcset="">
      
    
    
                 </div>
            
            

                <div class="col-lg-6">


                    <form action="/register" method="post" class="form_main_register form-main rounded-4 ms-3" >


                        <h1 class="text-center text-dark fs-1 fw-bold ">Crea Annuncio</h1>
                        <div class="inputContainer">
                            
                            <input wire:model="title" wire:input="capitalizeTitle" placeholder="Titolo" type="text" class="form-control shadow-lg rounded-4">

                        </div>
                        
                        <div class="inputContainer">

                            <input wire:model="price" placeholder="Prezzo" type="text" class="form-control shadow-lg rounded-5 mt-3">

                        </div>

                    <div class="inputContainer">

                        <select wire:model.defer="category" class="dropdown form-select text-dark rounded-4 mt-3" aria-label="Default select example">
                        <option selected class="dropdown-menu">Scegli Categoria</option>
                                @foreach($categories as $category)
                                    <option class = "dropdown-item"value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                        </select>

                    </div>

                    <div class="inputContainer">

                       <textarea wire:model="description" wire:input="capitalizeDescription" placeholder="Descrizione" cols="5" rows="1"class="form-control shadow-lg mt-3 rounded-4"></textarea>

                    </div>
                                
                            
                    <input wire:click="store" type="button" id="button" class="rounded-5 button-form-register" value="Pubblica"/>

                    

                    </form>
                   
                </div>
        </div>
    </div>


</section>
