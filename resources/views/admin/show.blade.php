@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <h1>PAGINE SHOW</h1>
    <h2>{{$post->Nome}}</h2>
    <img src="{{$post->Immagine_di_copertina}}" alt="">
 
 
    <!--pulsante di modifica-->
    <div class="py-5">
     <a href="{{route('admin.edit', $post->id)}}" class="btn btn-warning">Modifica</a>
      
 
     <!--il moi pulsante per l'eliminazione deve essere dentro un mini form-->
 <form action="{{route('admin.destroy', $post->id)}}" method="POST">
   <!--serve questo commando -->
   @csrf
   <!--serve questo commando -->
   @method("DELETE")
 
   <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"> Elimina</button>
 
  </form>
 
   </div>
</div>
@endsection
