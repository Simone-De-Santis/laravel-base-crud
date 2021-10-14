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
            <th scope="col">Actions</th>
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
              <td><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Details</a>
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning ">Edit</a>
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
  </div>
</div>
</div>
