@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <h1>pagina create</h1>

        <!--indichiamo anche il metodo POST per la richesta-->
        <form action="{{ route('admin.store')}}" method="POST" >
            @csrf

          <div class="mb-3">
            <label for="Nome" class="form-label">Nome File</label>
            <input type="text" class="form-control" id="Nome" name="Nome">
          </div>
          
          <div class="mb-3">
              <label for="Descrizione" class="form-label">Descrizione Comic</label>
              <textarea type="text" class="form-control" id="Descrizione" name="Descrizione"></textarea>   
            </div>


            <div class="mb-3">
              <label for="Immagine_di_copertina" class="form-label">Url immagime </label>
              <textarea type="text" class="form-control" id="Immagine_di_copertina" name="Immagine_di_copertina"></textarea>   
            </div>
            
            

            <div class="mb-3">
              <label for="Tecnologie_utilizzate" class="form-label">Tecnologie Utilizzate</label>
              <input type="string" class="form-control" id="Tecnologie_utilizzate" name="Tecnologie_utilizzate">
            </div>

            <div class="mb-3">
              <label for="Link_repo_GitHub" class="form-label">Link Per GitHub</label>
              <input type="string" class="form-control" id="Link_repo_GitHub" name="Link_repo_GitHub">
            </div>

            
         
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  




</div>
@endsection