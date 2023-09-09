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
                    <li><a href="{{ route('categories.show', $category->id) }}">{{ $category->title }}</a></li>
                @endforeach
            </ul>
        </div>
</div>

