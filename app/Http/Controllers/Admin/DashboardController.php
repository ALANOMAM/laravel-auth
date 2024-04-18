<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //  qui definiamo il metodo index che ci restituisce la pagina iniziale del Admin/DashboardController
    public function show() {
        return view('admin.show');
    }

    public function edit() {
        return view('admin.edit');
    }
}
