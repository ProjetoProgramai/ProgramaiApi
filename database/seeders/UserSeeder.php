<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                [
                    'email' => 'teste@teste.com',
                    'name' => 'usuario de teste 1',
                    'password' => '123456',

                ],
                [
                    'email' => 'teste2@teste.com',
                    'name' => 'usuario de teste 2',
                    'password' => '789123',

                ],
                [
                    'email' => 'teste3@teste.com',
                    'name' => 'usuario de teste 3',
                    'password' => '132458',

                ]

            ]
        );
    }
}
