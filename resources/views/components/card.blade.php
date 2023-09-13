<div class="container">
        <div class="row">
            @foreach($announcements as $announcement)
                <div class="col-lg-4 col-md-4 col-sm-6 px-5">
                    <div class="trend__content">
                    
                        <div class="trend__item p-5">
                            <div class="trend__item__pic">
                                <img src="https://picsum.photos/100/100" class="img-card-annuncement rounded-4" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>{{$announcement->title}}</h6>
                                <strong>{{$announcement->category->title}}</strong>
                                <div class="rating">
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                    <i class="fa fa-star" style="color: #ff5114 !important"></i>
                                </div>
                                <div class="product__price">€{{$announcement->price}}</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            @endforeach
    </div>
</div>