@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <h1>PAGINA CREATE</h1>

        <!--indichiamo anche il metodo POST per la richesta-->
        <form action="{{ route('admin.store')}}" method="POST" >
            @csrf

          <div class="mb-3">
            <label for="Nome" class="form-label"><strong>Nome File</strong></label>
            <input type="text" class="form-control @error('Nome') is-invalid @enderror" id="Nome" name="Nome" value="{{old('Nome')}}" required>
            @error('Nome') 
               <div class="invalid-feedback">
                {{$message}} 
               </div>
               @enderror
          </div>
          
          <div class="mb-3">
              <label for="Descrizione" class="form-label"><strong>Descrizione</strong></label>
              <textarea type="text" class="form-control @error('Descrizione') is-invalid @enderror" id="Descrizione" name="Descrizione" required>{{old('Descrizione')}}</textarea>   
              @error('Descrizione') 
               <div class="invalid-feedback">
                {{$message}} 
               </div>
               @enderror
            </div>


            <div class="mb-3">
              <label for="Immagine_di_copertina" class="form-label"><strong>Url immagime </strong></label>
              <textarea type="text" class="form-control" id="Immagine_di_copertina" name="Immagine_di_copertina">{{old('Immagine_di_copertina')}}</textarea>   
            </div>
            
            

            <div class="mb-3">
              <label for="Tecnologie_utilizzate" class="form-label"><strong>Tecnologie Utilizzate</strong></label>
              <input type="string" class="form-control" id="Tecnologie_utilizzate" name="Tecnologie_utilizzate" value="{{old('Tecnologie_utilizzate')}}">
            </div>

            <div class="mb-3">
              <label for="Link_repo_GitHub" class="form-label"><strong>Link Per GitHub</strong></label>
              <input type="string" class="form-control" id="Link_repo_GitHub" name="Link_repo_GitHub" value="{{old('Link_repo_GitHub')}}">
            </div>

            
         
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  




</div>
@endsection