<div class="container">
  @if (session('delete'))
    <div class="alert alert-warning mt-2" role="alert">
      <p> {{ session('delete') }} Eliminata con successo</p>
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
              <td class="d-flex"><a href="{{ route('comics.show', $comic->id) }}"
                  class="btn btn-primary">Details</a>
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
  </div>
</div>
<script>
  // intercettare l' evento in uscita dal form del deleet
  // bloccare il comportamento naturale del form (submit che poi si trasforma con il method)
  // chiedere all'utente
  // agire di conseguenza
  console.log('ciao')






  //! preso elemento dal quale esce l'evento   // queri selector prende il primo con quella classe All prende tutti 
  const deletFormElement = document.querySelectorAll('.delete-form');


  // con il cilo attachiamo il listener a tutti gli elementi in pagina 
  deletFormElement.forEach(form => {
    form.addEventListener('submit', function(e) {
      const name = form.getAttribute('data-comic');
      e.preventDefault(); // blocca l'esecuzione dell'evento naturale (nel form è submit)
      const conf = window.confirm(`Sei sicuro di voler eliminare ${name} ?`);
      if (conf) this.submit();
    });
  });


















  // ! questo lo possiamo fare se siamo su un elemento singolo tipo lo show si siamo come in questo caso su più elementi generati da un ciclo non possiamo aggasnciarli tutti con lo stesso id e allora agganciamo con la classe ---> up prosegue 

  //! preso elemento dal quale esce l'evento
  // const deletFormElement = document.getElementById('delet-form');
  // ascoltiamo l'evento ed agiamo    // il primo parametro della funzione in un addeventlistener è l'evento stesso
  // deletFormElement.addEventListener('submit', function(e) {
  // e.preventDefault(); // blocca l'esecuzione dell'evento naturale (nel form è submit)
  // const conf = window.confirm('Sei sicuro di voler eliminare  ?');
  // if (conf) this.submit();
  // })
</script>
