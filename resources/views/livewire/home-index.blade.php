<div>
    <!-- Categorie -->

<div class="container p-5 mt-4">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="section-title">
                <h4>Gli ultimi annunci</h4>
            </div>
        </div>
        <div class="col-lg-8 col-md-8">
            <ul class="filter__controls">
                <li class="active">Tutte le categorie</li>
                @foreach ($categories as $category)
                    <li><a href="" >{{ $category->title }}</a></li>
                @endforeach
            </ul>
        </div>
</div>


<!-- Ultimi Annunci -->

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

</div>
