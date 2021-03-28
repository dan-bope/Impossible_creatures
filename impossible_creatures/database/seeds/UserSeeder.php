<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Bope",
            'email' => "bope@gmail.com",
            'password' => "123456",
            'quantite_argent' => 45,
            'quantite_points' => 40,
            'inventaire_animals' => '[{"animal" : "chat"}, {"animal" : "chien"}, {"animal" : "zebre"}, {"animal" : "Anze"}]',
            'liste_especes' => '[{"espece" : "chaien"}, {"espece" : "chize"}, {"espece" : "chaze"}]',
            'vendeur' => 1,
            'acheteur' => 0
        ]);

        DB::table('users')->insert([
            'name' => "Rowandja",
            'email' => "row@gmail.com",
            'password' => "123456",
            'quantite_argent' => 25,
            'quantite_points' => 10,
            'inventaire_animals' => '[{"animal" : "Antiloppe"}, {"animal" : "Zebre"}]',
            'liste_especes' => '[{"espece" : "Anze"}, {"espece" : "ZeAnt"}]',
            'vendeur' => 1,
            'acheteur' => 1
        ]);

        DB::table('users')->insert([
            'name' => "Bope",
            'email' => "iyolo@gmail.com",
            'password' => "123456",
            'quantite_argent' => 25,
            'quantite_points' => 30,
            'inventaire_animals' => '[{"animal" : "Hippopotamus"}, {"animal" : "gorille"}]',
            'liste_especes' => '[{"espece" : "Higo"}]',
            'vendeur' => 0,
            'acheteur' => 1
        ]);

        DB::table('users')->insert([
            'name' => "Maeva",
            'email' => "maeva@gmail.com",
            'password' => "123456",
            'quantite_argent' => 25,
            'quantite_points' => 80,
            'inventaire_animals' => '[{"animal" : "Gorille"}, {"animal" : "Chevre"}, {"animal" : "rhileo"}]',
            'liste_especes' => '[{"espece" : "GoChe"}]',
            'vendeur' => 1,
            'acheteur' => 1
        ]);

        DB::table('users')->insert([
            'name' => "Fadhyl",
            'email' => "djoi@gmail.com",
            'password' => "123456",
            'quantite_argent' => 25,
            'quantite_points' => 110,
            'inventaire_animals' => '[{"animal" : "lion"}, {"animal" : "cheval"}]',
            'liste_especes' => '[{"espece" : "lionche"}]',
            'vendeur' => 1,
            'acheteur' => 1
        ]);

        DB::table('users')->insert([
            'name' => "Guarino",
            'email' => "ema@gmail.com",
            'password' => "123456",
            'quantite_argent' => 25,
            'quantite_points' => 22,
            'inventaire_animals' => '[{"animal" : "serpent"}, {"animal" : "souris"}, {"animal" : "chize"}]',
            'liste_especes' => '[{"espece" : "sersou"}]',
            'vendeur' => 0,
            'acheteur' => 1
        ]);

        DB::table('users')->insert([
            'name' => "LeBlond",
            'email' => "koffi@gmail.com",
            'password' => "123456",
            'quantite_argent' => 25,
            'quantite_points' => 30,
            'inventaire_animals' => '[{"animal" : "chat"}, {"animal" : "serpent"}]',
            'liste_especes' => '[{"espece" : "chaser"}, {"espece" : "serchat"}]',
            'vendeur' => 1,
            'acheteur' => 1
        ]);

        DB::table('users')->insert([
            'name' => "Lamotte",
            'email' => "jeamarc@gmail.com",
            'password' => "123456",
            'quantite_argent' => 25,
            'quantite_points' => 14,
            'inventaire_animals' => '[{"animal" : "Gorille"}, {"animal" : "Buffle"}]',
            'liste_especes' => '[{"espece" : "GoBu"}]',
            'vendeur' => 0,
            'acheteur' => 1
        ]);

        DB::table('users')->insert([
            'name' => "Lamotte",
            'email' => "alice@gmail.com",
            'password' => "123456",
            'quantite_argent' => 25,
            'quantite_points' => 5,
            'inventaire_animals' => '[{"animal" : "rhinoceros"}, {"animal" : "leopard"}]',
            'liste_especes' => '[{"espece" : "rhileo"}, {"espece" : "leorhi"}]',
            'vendeur' => 1,
            'acheteur' => 1
        ]);

        DB::table('users')->insert([
            'name' => "Nyate",
            'email' => "oblack@gmail.com",
            'password' => "123456",
            'quantite_argent' => 25,
            'quantite_points' => 18,
            'inventaire_animals' => '[{"animal" : "rat"}, {"animal" : "souris"}, {"animal" : "chize"}]',
            'liste_especes' => '[{"espece" : "rasou"}]',
            'vendeur' => 0,
            'acheteur' => 1
        ]);
    }
}
