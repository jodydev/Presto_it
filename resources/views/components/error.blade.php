@if ($errors->any())
    <div id="error" class="alert alert-danger mt-5 fixed-top alert-dismissible fade show d-flex align-items-center" style="margin-top:80px !important">
    <ul>     
       @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        setTimeout(close_alert(), 5000);
             function close_alert() {
                document.getElementById("error").style.display="none"       
                //$("#error").hide()
             }
    </script>


@endif