<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [   
                'name' => 'Numérobis',
                'creation_year' => 1965,
                'apparition_name' => 'Astérix & Cléopatre',
                'drawer_id' => 1
            ],
            [   
                'name' => 'Professeur Tournesol',
                'creation_year' => 1943,
                'apparition_name' => 'Les Aventures de Tintin, Le Trésor de Rackham le Rouge',
                'drawer_id' => 2
            ],
            [   
                'name' => 'Philip Mortimer',
                'creation_year' => 1950,
                'apparition_name' => 'Blake et Mortimer',
                'drawer_id' => 3,
            ],
            [   
                'name' => 'Capitaine Haddock',
                'creation_year' => 1941,
                'apparition_name' => 'Les Aventures de Tintin, Le Crabe aux pinces d\'or',
                'drawer_id' => 2
            ],
        ]);
    }
}
