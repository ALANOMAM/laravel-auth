@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <h1>pagina edit</h1>

    <!--ci restituisce il comic che abbiamo passato dal controller resources sezione edit-->
     {{-- @dump($comic) --}}
    
    
       <!--inseriamo il nome della rotta verso "update"(presente nel ComicController insiem a "create" ecc) 
        ed è li che avverà la modifica, quetso form riceve e manda solo le info. La rotta si è trovata gurdando il terminale-->

        <!--indichiamo anche il metodo POST per la richesta-->
        <form action="{{ route('admin.update', $post->id)}}" method="POST" >

            @csrf
            {{--ci serve il mommando @method("PUT")--}}
            @method("PUT")

          
          
          <div class="mb-3">
            <label for="Nome" class="form-label">Nome File</label>
            <input type="text" class="form-control @error('Nome') is-invalid @enderror" id="Nome" name="Nome" value="{{old('Nome')??$post->Nome}}">
            @error('Nome') 
            <div class="invalid-feedback">
             {{$message}} 
            </div>
            @enderror
          </div>
          
          <div class="mb-3">
              <label for="Descrizione" class="form-label">Descrizione</label>
              <textarea type="text" class="form-control @error('Descrizione') is-invalid @enderror" id="Descrizione" name="Descrizione">{{old('Descrizione')??$post->Descrizione}}</textarea>   
              @error('Descrizione') 
              <div class="invalid-feedback">
               {{$message}} 
              </div>
              @enderror
            </div>


            <div class="mb-3">
              <label for="Immagine_di_copertina" class="form-label">Url immagime </label>
              <textarea type="text" class="form-control" id="Immagine_di_copertina" name="Immagine_di_copertina">{{old('Immagine_di_copertina')??$post->Immagine_di_copertina}}</textarea>   
            </div>
            
            

            <div class="mb-3">
              <label for="Tecnologie_utilizzate" class="form-label">Tecnologie Utilizzate</label>
              <input type="string" class="form-control" id="Tecnologie_utilizzate" name="Tecnologie_utilizzate" value="{{old('Tecnologie_utilizzate')??$post->Tecnologie_utilizzate}}">
            </div>

            <div class="mb-3">
              <label for="Link_repo_GitHub" class="form-label">Link Per GitHub</label>
              <input type="string" class="form-control" id="Link_repo_GitHub" name="Link_repo_GitHub" value="{{old('Link_repo_GitHub')??$post->Link_repo_GitHub}}">
            </div>




          
            
         
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</div>
@endsection
