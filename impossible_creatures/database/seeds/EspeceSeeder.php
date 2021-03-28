<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspeceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especes')->insert([
           'name' => "chaien",
            'deux_epeces_parents' => '[{"parent1" : "chat"}, {"parent2" : "chien"}]',
            'users_inventaire' => 1
        ]);

        DB::table('especes')->insert([
            'name' => "Anze",
            'deux_epeces_parents' => '[{"parent1" : "Antiloppe"}, {"parent2" : "zebre"}]',
            'users_inventaire' => 2
        ]);

        DB::table('especes')->insert([
            'name' => "rasou",
            'deux_epeces_parents' => '[{"parent1" : "rat"}, {"parent2" : "souris"}]',
            'users_inventaire' => 10
        ]);

        DB::table('especes')->insert([
            'name' => "chize",
            'deux_epeces_parents' => '[{"parent1" : "chien"}, {"parent2" : "zebre"}]',
            'users_inventaire' => 2
        ]);

        DB::table('especes')->insert([
            'name' => "Higo",
            'deux_epeces_parents' => '[{"parent1" : "Hippopotamus"}, {"parent2" : "gorille"}]',
            'users_inventaire' => 3
        ]);

        DB::table('especes')->insert([
            'name' => "sersou",
            'deux_epeces_parents' => '[{"parent1" : "serpent"}, {"parent2" : "souris"}]',
            'users_inventaire' => 6
        ]);

        DB::table('especes')->insert([
            'name' => "rhileo",
            'deux_epeces_parents' => '[{"parent1" : "rhinoceros"}, {"parent2" : "leopard"}]',
            'users_inventaire' => 9
        ]);

        DB::table('especes')->insert([
            'name' => "leorhi",
            'deux_epeces_parents' => '[{"parent1" : "leopard"}, {"parent2" : "rhinoceros"}]',
            'users_inventaire' => 9
        ]);

        DB::table('especes')->insert([
            'name' => "lionche",
            'deux_epeces_parents' => '[{"parent1" : "lion"}, {"parent2" : "cheval"}]',
            'users_inventaire' => 5
        ]);
    }
}
