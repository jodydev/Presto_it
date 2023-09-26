<x-layout>

<x-session/>

</style>
<section>
    <div class="sezione">
        <div class="breadcrumb-option mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__links">
                            <a href="/"><i class="fa fa-home"></i> Home</a>
                            <span>Zona Revisore</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>       

    <section id="annunci-da-revisionare" style="margin-top:2rem";>
        <table id="revisorTable" class="display" style="width:85%">
        <thead>
            <tr>
                <th class="all">Titolo</th>
                <!-- <th>Categoria</th> -->
                <th class="not-mobile"> Prezzo</th>
                <th class="not-mobile"> Data pubblicazione</th>
                <!-- <th>Utente</th> -->
                <th class="not-mobile">Stato</th>
                <th class="">Azioni</th>                
            </tr>
        </thead>
        </table>
        
    </section>

<!-- JqUERY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- DataTables -->
 <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"> </script>
 <script src=https://cdn.datatables.net/colreorder/1.7.0/js/colReorder.bootstrap5.js> </script>
 <script src=https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js> </script>

<script>

function mostrAnnuncio(button){
        var id=button.dataset.id;
        window.location.href="/revisore/mostraAnnuncio/" + id ;
    };


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
     "responsive": true,
     "dom": '<"top"Bf>rt<"bottom">ip',
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
        // {data: 'categoria', name: 'categoria', orderable: true, searchable: true},
        {data: 'price', name: 'price', orderable: true, searchable: true},
        {data: 'created_at', name: 'created_at', orderable: true, searchable: false, render:function(data,type){
            return data.split('T')[0]
        }},
        // {data: 'user.email', name: 'user.email', orderable: true, searchable: true},
        {data: 'is_accepted', name: 'is_accepted', orderable: true, searchable: true, render:function(data,type){
            if(data==null) return "Sospeso";
            return data==1?"Accettato":"Rifiutato"
        }},
        {data: 'azioni', name: 'azioni', orderable: false, searchable: false},
     ],
     "columnDefs": [
     { "width": "22%", "targets": 0 },
     { "width": "10%", "targets": 1 },
     { "width": "10%", "targets": 2 },
     { "width": "10%", "targets": 3 },
     { "width": "10%", "targets": 4 },
    ]
    });
    $('#revisorTable_filter').css({"margin-end":"9rem","margin-bottom":"0.5rem"})
    $('#revisorTable_paginate').css({"margin-end":"9rem","margin-top":"0.5rem","margin-bottom":"0.5rem"})    
});

</script>

</x-layout>