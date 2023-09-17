@if ($errors->any())
<<<<<<< HEAD
    <div id="error" class="alert alert-danger">
=======
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:100px">  
>>>>>>> 8fc92ea365fe812aa1a5d945b79aa51eb565542d
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif