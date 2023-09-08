<x-layout>
    <br><br><br><br>

    <!-- 
        Per Marcello:
    1: la pagina show deve contenere i dati dell'annuncio in modo dinamico
    2: devi mettere le immagini nel carosello(vedi lorem picsum)
    3: i dati che servono sono i seguenti:
        - titolo annuncio
        - descrizione annuncio
        - categoria annuncio
        - autore annuncio
        - prezzo annuncio
    4: devi lavorare solo su questa vista, hai tutto ciò che ti serve
    5: ti consiglio di eliminare gli annunci che hai nel database e crearne di altri perché non avevi implementato le categorie
    6: copia e incolla assoutamente vietato (puoi copiare ed incollare solo lorem picsum)
-->
<div class="row">
    <div class="col-6">
        <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://picsum.photos/seed/picsum/200/300" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://picsum.photos/seed/picsum/200/300" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://picsum.photos/seed/picsum/200/300" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
     </div> 
        <div class="col-6">  
                            <div class="mb-3"><h1>{{$announcement->title}}
                            </h1></div>
                            <br>
                             <div-container>
                            <h3 class= "card-title">{{$announcement->title}}</h3>  
                              <p class="card-text">{{$announcement->description}}</p>
                              <p class="card-text">{{$announcement->price}}</p>

                              <p>{{$announcement->category->title }}</p> 
                    
                            </h3>

                            </div-container> 
                        

        </div> 

   <div>













</x-layout>