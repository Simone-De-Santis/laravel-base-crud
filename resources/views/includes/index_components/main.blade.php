<div class="container">
  @if (session('success'))
    <div class="alert alert-success mt-2" role="alert">
      <p> {{ session('success') }} Eliminata con successo</p>
    </div>
  @endif
</div>

<div class="container pt-5">
  <div class="card">
    <div class="card-title text-center">
      <h2 class='m-0 p-2 pb-4'>Fumetti caricati nel server</h2>
    </div>

    <hr>
    <div class="card-body">
      <table class="table  ">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Series</th>
            <th scope="col">Type</th>
            <th scope="col">Price</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @forelse($comics as $comic)
            <tr>

              <td>
                @if ($comic->thumb)
                  <img src="{{ $comic->thumb }}" alt="{{ $comic->title }} " class="img-fluid me-2" width="20">
                @endif
                {{ $comic->title }}
              </td>
              <td>{{ $comic->series }}</td>
              <td>{{ $comic->type }}</td>
              <td>{{ $comic->price }}</td>
              <td class="d-flex justify-content-center">
                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Details</a>
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning ms-2 ">Edit</a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="delete-form"
                  data-comic="{{ $comic->title }}">
                  {{-- con data- possiamo creare attributi personalizati che in questo caso andiamo a leggere con js per scrivere il nome nell'allert --}}
                  @csrf
                  @method('DELETE')
                  {{-- inserito un form perchè è l'unica maniera per intereagire e abbiamo cambiato il metodo con @method per il delite --}}
                  <button type="submit" class="btn btn-danger ms-2">Delite</button>
                </form>
              </td>

            </tr>
          @empty
            <tr>
              <td colspan='5' class='text-center'> Non ho trovato fumetti</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
    <div class="card-footer bg-white mx-auto">
      <a href="{{ route('comics.trash') }}">&#128465; - Vai al cestino</a>



    </div>
  </div>
  <script>

  </script>
