<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//per gestire tante rotte insieme sotto lo stesso middleware
//e raggrupparle con elementi comuni 
Route::middleware(['auth', 'verified'])
        ->name('admin.')// i loro nomi inizino tutti con "admin.
        ->prefix('admin')// tutti i loro url inizino con "admin/"
        ->group(function() {
            // qui ci metto tutte le rotte che voglio che siano:
                // raggruppate sotto lo stesso middelware
                // i loro nomi inizino tutti con "admin.
                // tutti i loro url inizino con "admin/"
                
             //ROTTE PER LE PAGINE SOLO ACCESSIBILI AGLI AMMINISTRATORI
             
             //la rotta che mi crea il trio con DashboardController e la introPage di 
             //admin, dove do il benvenuto all'admin e scrivo il suo nome in modo dinamico
             Route::get('/', [DashboardController::class, 'introPage'])->name('introPage');


             //la rotta che mi crea il trio con DashboardController e la pagina users di 
             //admin, dove posso scrivere il nome di tutti gli utenti amministratori
            Route::get('/users', [DashboardController::class, 'users'])->name('users');

           //la rotta che mi crea il trio con PostController e la cartella posts di 
           //admin, dove sono presenti le varie viste, show, edit, index ecc
            Route::resource('posts',PostController::class);
        }

       
        
);