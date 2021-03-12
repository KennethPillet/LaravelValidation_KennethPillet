<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrawerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drawers')->insert([
            [
                'name' => 'René Goscinny',
                'birth_year' => 1926,
                'nationality' => 'Francais',
            ],
            [
                'name' => 'Hergé',
                'birth_year' => 1907,
                'nationality' => 'Belge',
            ],
            [
                'name' => 'Edgar P. Jacobs',
                'birth_year' => 1904,
                'nationality' => 'Belge',
            ],
            [
                'name' => 'Kenneth',
                'birth_year' => 1994,
                'nationality' => 'Francais',
            ]
        ]);
    }
}
