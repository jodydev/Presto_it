@if(session('message'))
    <div class="alert alert-success mt-5 fixed-top alert-dismissible fade show d-flex align-items-center" role="alert" style="margin-top:100px !important">
    <i class="fa-solid fa-circle-check me-3" style="color: #0f5132;"></i>  
        {{ session('message') }}
        
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif