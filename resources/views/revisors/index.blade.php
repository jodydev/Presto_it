<x-layout>
    <section id="annunci-da-revisionare">
        <!-- <div class="container py-5 mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title py-5">
                        @if (!$announcement)
                        <h4 class="py-4">Non ci sono annunci da revisionare</h4>
                       
                        @elseif ($announcement->user_id == auth()->user()->id )
                        <h4 class="py-4">Ci dispiace ma non puoi revisionare i tuoi stessi annunci, attendi con pazienza un tuo collega.</h4>
                        @else 
                        <h4 class="py-4">Ecco gli annunci da revisionare</h4>
                        @endif
                    </div>
                </div>
                
            </div>
        </div> -->

        <table id="revisorTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Descrizione</th>
                <!-- <th>Categoria</th> -->
                <th>Prezzo</th>
                <th>Data pubblicazione</th>
                <!-- <th>Utente</th> -->
                <th>Azioni</th>                
            </tr>
        </thead>
        </table>
        
        <!-- @if($announcement && $announcement->user_id !== auth()->user()->id)-->
        <!-- MODIFICARE ASSOLUTAMENTE IL CAROSELLO PERCHE è VERAMENTE BRUTTO <3 -->
       
        <!-- <div id="details_revisore">
        <div class="card mb-5">
        <div class="row">
        <div class="col-sm-12 col-md-4 border-right pr-0">
            <div class="photo">
            <div id="carouselExample" class="carousel slide">
            @if($announcement->images->count() > 0)
            <div class="carousel-inner rounded-4">
                @foreach($announcement->images as $image)
                
                <div class="carousel-item @if ($loop->first) active @endif">
                <img src="{{$image->getUrl(150, 150)}}" class="d-block w-100" alt="...">
                
                </div>
                @endforeach
            </div>
            @else
            
        <div class="carousel-inner rounded-4">
            <div class="carousel-item active">
            <img src="{{asset('img/logo/code_geeks.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{{asset('img/logo/logo.png')}}" class="d-block w-100" alt="...">
            </div>
            
        </div>
            @endif
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
        </div> -->

        <!-- <div class="col-sm-12 col-md-8">
            <div class="description">
            <h2 class= "card-title">{{$announcement->title}}</h2>
            <h4 class= "card-text">{{$announcement->category->title }}</h4>
            <h2 class= "card-text mt-2">€ {{$announcement->price}}</h1>
            <p class= "card-text">{{$announcement->description}}</p2>
            </div>
            <div class="container p-5 bg-dark shadow-lg">
            <div class="row">
                <div class="col-lg-6">
                    <form id="button-accetta" action="{{route('revisors.accept', $announcement)}}" method="post">
                        @method('PATCH')
                        @csrf
                        <input type="submit" value="Accetta" class="button-accetta rounded-4 shadow-lg">
                    </form>
                </div>
                <div class="col-lg-6">
                    <form id="button-rifiuta" action="{{route('revisors.decline', $announcement)}}" method="post" >
                        @method('PATCH')
                        @csrf
                        <input type="submit" value="Rifiuta" class="button-rifiuta rounded-4 shadow-lg">
                    </form>
                </div>
                
            </div>
        </div> -->
        


</div>

</div>

</div>
    @endif
    </section>

<!-- JqUERY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- DataTables -->
 <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"> </script>
   
<script>

    $(document).ready(function(){
        $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
   });
        var id= JSON.parse("{{ json_encode(auth()->user()->id)}}");
        $('#revisorTable').dataTable({
     "processing": true,
     "serverSide": true,
     "bServerSide": true,
     "orderMulti": false,
     "ordering": true,
     "dom": '<"top"Bf>rt<"bottom"l>ip',
     "oLanguage": {
         "sEmptyTable": "Nessun dato presente",
         "sInfo": "",
         "sInfoEmpty": "",
         "sInfoFiltered": "",
         "sInfoPostFix": "",
         "sInfoThousands": ".",
         "sLengthMenu": "righe per pagina MENU",
         "sLoadingRecords": "caricamento...",
         "sProcessing": "elaborazione...",
         "sSearch": "Cerca:",
         "sZeroRecords": "La ricerca non ha portato alcun risultato.",
         "oPaginate": {
             "sFirst": "Inizio",
             "sPrevious": "Precedente",
             "sNext": "Successivo",
             "sLast": "Fine"
         },
         "oAria": {
             "sSortAscending": ": attiva per ordinare la colonna in ordine crescente",
             "sSortDescending": ": attiva per ordinare la colonna in ordine decrescente"
         }
     },
     "info": true,
     "autoWidth": true,
     "lengthMenu": [[20, 40, -1], [20, 40, "Tutte"]],
     "paging": true,
     "pageLength": 20,
     "ajax": {
         "url": "{{route('revisors.table',auth()->user()->id)}}",
         "type": "Post",
         "datatype": "json",

     },
     "language": {
         "decimal": ",",
         "thousands": "."
     },
     "columns": [
        {data: 'title', name: 'title', orderable: true, searchable: true},
        {data: 'description', name: 'description', orderable: false, searchable: true},
        // {data: 'categoria', name: 'categoria', orderable: true, searchable: true},
        {data: 'price', name: 'price', orderable: true, searchable: true},
        {data: 'created_at', name: 'created_at', orderable: true, searchable: false},
        // {data: 'user.email', name: 'user.email', orderable: true, searchable: true},
        {data: 'azioni', name: 'azioni', orderable: false, searchable: false},
     ]
    });
});

</script>

</x-layout>