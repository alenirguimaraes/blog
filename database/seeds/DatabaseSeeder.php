<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        echo "Criando 10 autores...\n";
        factory(App\Author::class, 10)->create();

        echo "Criando 36 posts relacionando aos autores aleatoriamente...\n";
        factory(App\Post::class, 36)->create();
        
        echo "Criando 67 comentarios relacionando aos posts aleatoriamente...\n";
        factory(App\Comment::class, 67)->create();
    }
}
