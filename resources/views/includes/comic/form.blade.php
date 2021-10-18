@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>

  </div>
@endif


{{-- verifichiamo se stiamo creando o editando --}}
{{-- se stimao creando non avremo l'istanza comic al contrario l'istanza è ciò che stiamo modificando --}}
{{-- exist verifica se è '''veramente''' una istanza reale (con id e tutto il resto) --}}
@if ($comic->exists)
  <form method="POST" action="{{ route('comics.update', $comic->id) }}">
    @method('PATCH')
    {{-- anche se nel form abbiamo messo post per inviare il form all'update dobbiamo usare PUT o PATCH in questa maniera lo cambiamo --}}
  @else
    <form method="POST" action="{{ route('comics.store') }}">
@endif
@csrf
{{-- token di sicurezza per laravel --}}
<div class="row">
  <div class="col-md-5">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" required value="{{ $comic->title }}">
      <div class="form-text">Inserire Titolo Comics</div>
    </div>
  </div>
  <div class="col-md-5">
    <div class="mb-3">
      <label for="thumb" class="form-label">Thumb</label>
      <input type="text" class="form-control" id="thumb" name="thumb" required value="{{ $comic->thumb }}">
      <div class="form-text">Inserire link img copertina Comics
      </div>
    </div>
  </div>
  <div class="col-md-2">
    {{-- codiscing operator --}}
    <img
      src="{{ $comic->logo ?? 'https://image.shutterstock.com/image-vector/ui-image-placeholder-wireframes-apps-260nw-1037719204.jpg' }}"
      alt="placeholder" width="100" class="img-fluid" id="preview">
  </div>
  <div class="col-md-3">
    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control" id="series" name="series" required value="{{ $comic->series }}">
      <div class="form-text">Inserire Series Comics</div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="mb-3">
      <label for="type" class="form-label">Type</label>
      <input type="text" class="form-control" id="type" name="type" required value="{{ $comic->type }}">
      <div class="form-text">Inserire type Comics</div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="mb-3">
      <label for="sale_date" class="form-label">Sale date</label>
      <input type="date" class="form-control" id="sale_date" name="sale_date" required
        value="{{ $comic->sale_date }}">
      <div class="form-text">Inserire data di vendita Comics</div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" class="form-control" id="price" name="price" required value="{{ $comic->price }}">
      <div class="form-text">Inserire prezzo di vendita Comics </div>
    </div>
  </div>
  <div class="col 12">
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" rows="5"
        name='description'>{{ $comic->description }}</textarea>
      <div class="form-text">Inserire descrizione Comics </div>
    </div>
  </div>
</div>
<div class="card-footer bg-white d-flex justify-content-between">
  <button type="reset" class='btn btn-secondary'>Reset</button>
  <button type="submit" class='btn btn-success'>Eddit</button>

</div>
</form>
