<x-layout>

<x-session/>

    <section id="annunci-da-revisionare" style="margin-top:80px";>
        <table id="revisorTable" class="display" style="width:98%">
        <thead>
            <tr>
                <th>Titolo</th>
                <!-- <th>Categoria</th> -->
                <th>Prezzo</th>
                <th>Data pubblicazione</th>
                <!-- <th>Utente</th> -->
                <th>Stato</th>
                <th>Azioni</th>                
            </tr>
        </thead>
        </table>
        
    </section>

<!-- JqUERY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- DataTables -->
 <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"> </script>
   
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
     ]
    });
    $('#revisorTable_filter').addClass("me-3");
    // $('.button-mostra').on("click",function(){
        
});

</script>

</x-layout>