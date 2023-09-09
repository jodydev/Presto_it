<!-- CARD -->

<div class="container mt-5 mb-3">
    <div class="row">

      @foreach ($announcements as $announcement)
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">

                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"><img src="./img/avatar-about.png" alt="" srcset=""></div>
                        <div class=" c-details ms-2">
                            <h6 class="mb-0">{{ $announcement->user->name }}</h6> <span>Postato il {{ $announcement->created_at->format('d/m/y') }}</span>
                        </div>
                    </div>

                    <!-- SPAN CATEGORIA -->
                    
                    <div class="ribbon"><span class="ribbon__content">{{ $announcement->category->title }}</span></div>
                    

                </div>

                <div class="mt-5">
                    <h3 class="heading">{{ $announcement->title }}</h3>
                    <span> {{ $announcement->price }} €</span>
                    <p> {!! substr($announcement->description, 0, 20) !!}...</p>
                    <div class="mt-5">
                      <a href="{{ route('announcements.show', $announcement->id) }}" class="button-card shadow-lg">In dettaglio</a>
                    </div>
                </div>
            </div>
        </div>

      @endforeach  
    </div>
</div>
       