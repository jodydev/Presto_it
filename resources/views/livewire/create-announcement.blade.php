<div>
<div class="container mt-5 ">
    <div class="row myform ">
        <div class="col-12">
            <div class="mb-3">
                <label for="text" class="form-label">Titolo</label>
                <input wire:model="title" type="text" class="form-control shadow">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Descrizione</label>
                <textarea wire:model="description" cols="10" rows="10"class="form-control shadow"></textarea>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">prezzo</label>
                <input wire:model="price" type="text" class="form-control shadow">
            </div>

            <button type="button" class="btn btn-primary" wire:click="store">Crea</button>
        </div>
    </div>
</div>


</div>