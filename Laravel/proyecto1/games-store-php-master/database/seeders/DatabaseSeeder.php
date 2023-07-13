<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Videogame;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();

        $user=User::factory()->create([
            'name'=> 'Juan Gerardo',
            'email'=> 'jmendez@gmail.com'
        ]);
        

        Videogame::create(
            [
                "name"=>"Gears of War 3",
                'user_id'=>$user->id,
                "description"=> "Gears of War 3 es la espectacular conclusión de una de las sagas de videojuegos más célebres y memorables. Con los supervivientes dispersos y la civilización en ruinas, a Marcus y sus camaradas se les acaba el tiempo mientras luchan por salvar a la raza humana.",
                "price"=> 10
              ]
        );
        
        Videogame::create(
            [
                "name"=>"Fifa 22",
                'user_id'=>$user->id,
                "description"=>"FIFA 22 es un videojuego desarrollado por EA Vancouver y EA Romania, siendo publicado por EA Sports. Está disponible para PlayStation 4, PlayStation 5, Xbox Series X/S, Xbox One, Microsoft Windows, Google Stadia, y Nintendo Switch. Es la vigésimo novena entrega en la serie FIFA y fue lanzado el 1 de octubre de 2021 de manera global. " , 
                "price"=> 20
            ]
        );

        Videogame::create([
            "name"=>"Grand Thef Auto: San Andreas",
            'user_id'=>$user->id,
            "description"=>"Hace cinco años Carl Johnson huyó de los rigores de vivir en Los Santos, San Andreas, una ciudad destrozada por las bandas, las drogas y la corrupción en la que las estrellas de cine y los millonarios hacen lo posible por evitar a los traficantes y a los pandilleros.",
            "price"=> 5
        ]);

        Videogame::create([
            "name"=>"Rocket League",
            'user_id'=>$user->id,
            "description"=>"Salta al campo en solitario o con amigos en los modos de juego en línea 1v1, 2v2 y 3v3, o disfruta de los modos extra como Rumble, Snow Day o Hoops. ¡Desbloquea objetos con el Rocket Pass, sube de rango competitivo, participa en torneos competitivos, supera desafíos, disfruta del progreso multiplataforma y mucho más! El campo te espera. ¡Haz el saque inicial! " ,
            "price"=> 12.5
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
