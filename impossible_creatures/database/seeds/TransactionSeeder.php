<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'id_users_vendeur' => 1,
            'id_animal_vendu' => 3,
            'prix' => 15,
            'date_mise_en_vente' => "10-06-2002",
            'id_users_acheteur' => 10,
            'date_achat' => "10-06-2003"
        ]);

        DB::table('transactions')->insert([
            'id_users_vendeur' => 1,
            'id_animal_vendu' => 4,
            'prix' => 15,
            'date_mise_en_vente' => "10-06-2020",
            'id_users_acheteur' => 6,
            'date_achat' => "10-06-2021"
        ]);
    }
}
