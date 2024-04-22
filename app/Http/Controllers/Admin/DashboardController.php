<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //  qui definiamo il metodo index che ci restituisce la pagina iniziale del Admin/DashboardController
    
   public function introPage() {

        $posts = Post::all();

        return view('admin.introPage', compact("posts"));
    }
    
    public function users() {
        return view('admin.users');
    }
  
    
}
