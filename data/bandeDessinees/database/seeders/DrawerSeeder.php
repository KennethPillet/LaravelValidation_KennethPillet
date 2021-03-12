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
        DB::table('authors')->insert([
            [
                'name' => 'René Goscinny',
            ],
            [
                'name' => 'Hergé',
            ],
            [
                'name' => 'Edgar P. Jacobs',
            ],
            [
                'name' => 'Kenneth',
            ]
        ]);
    }
}
