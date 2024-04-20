<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::all();

         return view("admin/index", compact("posts")); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $newPostElement = new Post();

         
        $newPostElement->Nome = $request['Nome']; 
        $newPostElement->Descrizione = $request['Descrizione'];
        $newPostElement->Immagine_di_copertina = $request['Immagine_di_copertina'];
        $newPostElement->Tecnologie_utilizzate = $request['Tecnologie_utilizzate'];
        $newPostElement->Link_repo_GitHub = $request['Link_repo_GitHub'];
        
        $newPostElement->save();

        return redirect()->route("admin.show", $newPostElement->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post,string $id)
    {
        //
        $post = Post::find($id);
        return view("admin/show",compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        return view("admin/edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
