<div class="container">
  <div class="card-title mt-5">
    <div class="d-flex justify-content-between align-items-center">
      <h1>inserisci nuovo fumetto</h1>
      <a href="{{ route(url()->previous()) }}" class="btn btn-secondary">Return</a>
    </div>
    <hr>
    <div class="card-body">
      <form method="POST" action="{{ route('comics.store') }}">
        @csrf
        <div class="row">
          <div class="col-md-5">
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" required>
              <div class="form-text">Inserire Titolo Comics</div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="mb-3">
              <label for="thumb" class="form-label">Thumb</label>
              <input type="text" class="form-control" id="thumb" name="thumb" required>
              <div class="form-text">Inserire link img copertina Comics
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <img
              src="https://image.shutterstock.com/image-vector/ui-image-placeholder-wireframes-apps-260nw-1037719204.jpg"
              alt="placeholder" width="100" class="img-fluid" id="preview">
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="series" class="form-label">Series</label>
              <input type="text" class="form-control" id="series" name="series" required>
              <div class="form-text">Inserire Series Comics</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="type" class="form-label">Type</label>
              <input type="text" class="form-control" id="type" name="type" required>
              <div class="form-text">Inserire type Comics</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="sale_date" class="form-label">Sale date</label>
              <input type="date" class="form-control" id="sale_date" name="sale_date" required>
              <div class="form-text">Inserire data di vendita Comics</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="number" class="form-control" id="price" name="price" required>
              <div class="form-text">Inserire prezzo di vendita Comics </div>
            </div>
          </div>
          <div class="col 12">
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" rows="5" name='description'></textarea>
              <div class="form-text">Inserire descrizione Comics </div>
            </div>
          </div>
        </div>
        <div class="card-footer bg-white d-flex justify-content-between">
          <button type="reset" class='btn btn-secondary'>Reset</button>
          <button type="submit" class='btn btn-success'>Create</button>

        </div>
    </div>
  </div>
  </form>
</div>

@section('scripts')
  <script>
    const preview = document.getElementById('preview');
    const placeholder =
      'https://image.shutterstock.com/image-vector/ui-image-placeholder-wireframes-apps-260nw-1037719204.jpg';
    const logoImput = document.getElementById('thumb');

    logoImput.addEventListener('change', function() {
      const url = this.value;
      if (url) {
        preview.setAttribute('src', url);
      } else
        preview.setAttribute('src', placeholder);

    })
  </script>
@endsection
