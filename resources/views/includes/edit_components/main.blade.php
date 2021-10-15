<div class="container">
  <div class="card-title mt-5">
    <div class="d-flex justify-content-between align-items-center">
      <h1>Modifica info fumetto -{{ $comic->title }}-</h1>
      <a href="{{ url()->previous() }}" class="btn btn-secondary">Return</a>
    </div>
    <hr>
    <div class="card-body">
      @include('includes.comic.form')
    </div>
