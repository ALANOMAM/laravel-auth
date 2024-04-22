@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <h1>PAGINA INDEX</h1>
    {{---@dd($posts)---}}

   <!-- in questa pagina visualizzo tutti i nomi dei comics in una tabella -->
   <table class="table">
    <thead>
      <tr>
        <th scope="col">Nomi Files</th>
        <th scope="col"></th>
      </tr>
    </thead>

    <tbody>
       
        @foreach ($posts as $post)
        <tr>      
        <td>{{$post->id}} - {{$post->Nome}}</td>
        <!--è in questo punto che collego il file/vista "index" col file show tramite link-->
        <!--la rotta giù me la ricavo cercando sul terminale, e mi da appunto "comics.show"-->
        <td><a class="btn btn-success" href="{{route('admin.posts.show' , $post->id )}}">visualizza post</a></td>
       </tr>
        @endforeach
        
    </tbody>
  </table>

  <!--è in questo punto che collego il file index col file/vista "create" tramite link-->
<!--la rotta giù me la ricavo cercando sul terminale, e mi da appunto "comics.create"-->
  <a href="{{route('admin.posts.create')}}" class="btn btn-primary">Aggiungi post</a>
 
</div>
@endsection