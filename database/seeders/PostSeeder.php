<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {    //riferimento alle tecnologie utilizate
        // $newComic->artists = implode(' , ', $comic['artists']);

        for($i = 0; $i < 10; $i++) {
            //creo un nuovo oggetto che conterrà le info delle mie nuove righe
            $newPost = new Post();
    
            $newPost->Nome = 'alan';
            $newPost->Descrizione = 'you are not alone, i am here with you' ;
            $newPost->Immagine_di_copertina = 'https://media.istockphoto.com/id/537331500/photo/programming-code-abstract-technology-background-of-software-deve.jpg?s=612x612&w=0&k=20&c=jlYes8ZfnCmD0lLn-vKvzQoKXrWaEcVypHnB5MuO-g8=';
            $newPost->Tecnologie_utilizzate=  implode(' , ', ['html','css','javascrit']) ;
            $newPost->Link_repo_GitHub= 'https://www.youtube.com/' ;
            
    
            //questo ci serve per salvare i campi e applicare e modifiche
            $newPost->save();
            }


    }
}
