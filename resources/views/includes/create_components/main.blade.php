<div class="container">
  <div class="card-title mt-5">
    <div class="d-flex justify-content-between align-items-center">
      <h1>Inserisci nuovo fumetto</h1>
      <a href="{{ url()->previous() }}" class="btn btn-secondary">Return</a>
    </div>
    <hr>
    <div class="card-body">
      @include('includes.comic.form')
    </div>

    @section('scripts')
      @include('includes/generics_component/script_preview')
    @endsection
