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

         return view("admin/posts/index", compact("posts")); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin/posts/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $request->validated();

        $newPostElement = new Post();

         
        $newPostElement->Nome = $request['Nome']; 
        $newPostElement->Descrizione = $request['Descrizione'];
        $newPostElement->Immagine_di_copertina = $request['Immagine_di_copertina'];
        $newPostElement->Tecnologie_utilizzate = $request['Tecnologie_utilizzate'];
        $newPostElement->Link_repo_GitHub = $request['Link_repo_GitHub'];
        
        $newPostElement->save();

        return redirect()->route("admin.posts.show", $newPostElement->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        // $post = Post::find($id);
        return view("admin/posts/show", compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view("admin/posts/edit",compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( string $id,StorePostRequest $request)
    {
        $request->validated();

        $newPostElement2 =  Post::find($id);

         
        $newPostElement2->Nome = $request['Nome']; 
        $newPostElement2->Descrizione = $request['Descrizione'];
        $newPostElement2->Immagine_di_copertina = $request['Immagine_di_copertina'];
        $newPostElement2->Tecnologie_utilizzate = $request['Tecnologie_utilizzate'];
        $newPostElement2->Link_repo_GitHub = $request['Link_repo_GitHub'];
        
        $newPostElement2->save();

        return redirect()->route("admin.posts.show", $newPostElement2->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        
        $post->delete();

        return redirect()->route("admin.posts.index", $post->id);
    }
}
