<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $videoGames=['Crash','Pepsi_Man','Call of duty','Minecraft','Fifa','PES','Forza horizon','Crash','God of war','Forza','GTA_V','God of war','Minecraft'];
        $rol=['Aventura','Deportes','Shooter','Carreras','Arcade','Simulador','Estrategia','Puzzle'];

        for ($i=0; $i <20000; $i++) { 
            DB::table('videogames')->insert([
                'Nombre'=>$videoGames[rand(0,12)],
                'Descripcion'=>$rol[rand(0,7)],
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ]);        
        }
    }
}
