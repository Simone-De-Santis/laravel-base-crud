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
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required
        value="{{ old('title', $comic->title) }}">
      @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @else
        <div class="form-text">Inserire Titolo Comics</div>
      @enderror
    </div>
  </div>
  <div class="col-md-5">
    <div class="mb-3">
      <label for="thumb" class="form-label">Thumb</label>
      <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" required
        value="{{ old('thumb', $comic->thumb) }}">
      @error('thumb')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @else
        <div class="form-text">Inserire link img copertina Comics</div>
      @enderror
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
      <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" required
        value="{{ old('series', $comic->series) }}">
      @error('series')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @else
        <div class="form-text">Inserire Series Comics</div>
      @enderror
    </div>
  </div>
  <div class="col-md-3">
    <div class="mb-3">
      <label for="type" class="form-label">Type</label>
      <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" required
        value="{{ old('type', $comic->type) }}">
      @error('type')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @else
        <div class="form-text">Inserire type Comics</div>
      @enderror
    </div>
  </div>
  <div class="col-md-3">
    <div class="mb-3">
      <label for="sale_date" class="form-label">Sale date</label>
      <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date"
        required value="{{ old('sale_date', $comic->sale_date) }}">
      @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @else
        <div class="form-text">Inserire data di vendita Comics</div>
      @enderror
    </div>
  </div>
  <div class="col-md-3">
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required
        value="{{ old('price', $comic->price) }}">
      @error('price')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @else
        <div class="form-text">Inserire prezzo di vendita Comics </div>
      @enderror
    </div>
  </div>
  <div class="col 12">
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="5"
        name='description'>{{ old('description', $comic->description) }}</textarea>
      @error('description')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @else
        <div class="form-text">Inserire descrizione Comics </div>
      @enderror
    </div>
  </div>
</div>
<div class="card-footer bg-white d-flex justify-content-between">
  <button type="reset" class='btn btn-secondary'>Reset</button>
  <button type="submit" class='btn btn-success'>Eddit</button>

</div>
</form>
