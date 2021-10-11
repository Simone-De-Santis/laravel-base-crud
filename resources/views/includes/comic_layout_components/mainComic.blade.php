<div class="container">
  <div class="row">
    <div class="col-4">
      <img src="{{ $comic->thumb }}" alt="">
    </div>
    <div class="col-8">
      <h1>Description</h1>
      <p>Title : <strong>{{ $comic->title }}</strong>
      </p>

      <p>Description : <strong>{{ $comic->description }}</strong></p>
      <p>Type: <strong>{{ $comic->type }}</strong></p>
      <p>Series: <strong>{{ $comic->series }}</strong></p>
      <p>Price : <strong>{{ $comic->price }}</strong></p>
      <p>Data sale : <strong>{{ $comic->sale_date }}</strong></p>


      </p>
    </div>
  </div>
</div>
