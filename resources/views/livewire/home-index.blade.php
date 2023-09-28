<section id="annunci-index">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>{{__('traduzioni.LastAnn')}}</h4>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 category-title-margin">
                <ul class="filter__controls">
                    <!-- assegno il valore alla variabile selectCategory al click dell'utente con il metodo nativo livewire $set e con un if else in line assegno o tolgo la classe active -->
                <li wire:click="$set('selectedCategory', null)" class="{{ !$selectedCategory ? 'active' : '' }}">Tutte le categorie</li>
            @foreach ($categories as $category)
                <li wire:click="$set('selectedCategory', {{ $category->id }})" class="{{ $selectedCategory == $category->id ? 'active' : '' }} ">{{ $category->title }}</li>
            @endforeach
                </ul>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            @foreach($announcements as $announcement)
                <div class="col-lg-4 col-md-4 col-sm-6 px-5">
                    <div class="trend__content mt-5">
                    
                        <div class="trend__item zoom-wrapper">
                            <div class="trend__item__pic">
                            @if($announcement->images->count() > 0)
                                <img src="{{$announcement->images()->first()->getUrl(150, 150)}}" class="img-card-annuncement rounded-4" alt="">
                                @else
                                <img src="{{asset('img/logo/code_geeks.png')}}" class="img-card-annuncement rounded-4" alt="">
                                @endif
                            </div>    
                            <div class="trend__item__text">
                                <h6>{{$announcement->title}}</h6>
                                <span>{{$announcement->category->title}}</span>
                                <div class="rating">
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                </div>
                                <div class="product__price">€{{$announcement->price}}</div>
                                <a href="{{route('announcements.show', $announcement->id)}}">{{__('traduzioni.Scopri!')}}</a>
                                <small>{{$announcement->created_at->format('d/m/y')}}</small>
                            </div>
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
    



