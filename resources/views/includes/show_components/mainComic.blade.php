<div class="container">
  <div class="card mt-5">
    <div class="card-title">
      <div class="d-flex align-items-center justify-content-center">
        <h1>Description</h1>
        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-outline-secondary btn-sm m-2">Edit</a>
      </div>
    </div>
    <div class="row m-5">
      <div class="col-4">
        <img src="{{ $comic->thumb }}" alt="">
      </div>
      <div class="col-8">
        <p>Title : <strong>{{ $comic->title }}</strong></p>
        <p>Description : <strong>{{ $comic->description }}</strong></p>
        <p>Type: <strong>{{ $comic->type }}</strong></p>
        <p>Series: <strong>{{ $comic->series }}</strong></p>
        <p>Price : <strong>{{ $comic->price }}</strong></p>
        <p>Data sale : <strong>{{ $comic->sale_date }}</strong></p>
        </p>
      </div>
    </div>
    <div class="card-footer d-flex justify-content-end bg-white">
      <a href="{{ route('comics.index') }}" class="btn btn-primary"> Return</a>
    </div>
  </div>
</div>
