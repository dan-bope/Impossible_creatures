<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            'especes' => "chaien",
            'id_users_cree' => 1,
            'id_users_proprietaire' => 1,
        ]);

        DB::table('animals')->insert([
            'especes' => "Anze",
            'id_users_cree' => 2,
            'id_users_proprietaire' => 1,
        ]);

        DB::table('animals')->insert([
            'especes' => "chize",
            'id_users_cree' => 1,
            'id_users_proprietaire' => 10,
        ]);

        DB::table('animals')->insert([
            'especes' => "chize",
            'id_users_cree' => 1,
            'id_users_proprietaire' => 6,
        ]);

        DB::table('animals')->insert([
            'especes' => "rhileo",
            'id_users_cree' => 9,
            'id_users_proprietaire' => 4,
        ]);

        DB::table('animals')->insert([
            'especes' => "lionche",
            'id_users_cree' => 5,
            'id_users_proprietaire' => 4,
        ]);

        DB::table('animals')->insert([
            'especes' => "lionche",
            'id_users_cree' => 5,
            'id_users_proprietaire' => 3,
        ]);

        DB::table('animals')->insert([
            'especes' => "rhileo",
            'id_users_cree' => 9,
            'id_users_proprietaire' => 8,
        ]);

    }
}
