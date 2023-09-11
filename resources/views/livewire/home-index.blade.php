<section id="annunci-index">
    <div class="container p-5 mt-4">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>Gli ultimi annunci</h4>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <ul class="filter__controls">
                    <!-- assegno il valore alla variabile selectCategory al click dell'utente con il metodo nativo livewire $set e con un if else in line assegno o tolgo la classe active -->
                <li wire:click="$set('selectedCategory', null)" class="{{ !$selectedCategory ? 'active' : '' }}">Tutte le categorie</li>
            @foreach ($categories as $category)
                <li wire:click="$set('selectedCategory', {{ $category->id }})" class="{{ $selectedCategory == $category->id ? 'active' : '' }}">{{ $category->title }}</li>
            @endforeach
                </ul>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            @foreach($announcements as $announcement)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                    
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="img/trend/ht-1.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>{{$announcement->title}}</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">€{{$announcement->price}}</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
    



