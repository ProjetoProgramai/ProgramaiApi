<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LinguagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('linguagens')->insert([
                [
                    'nome' => 'Java'

                ],
                [
                    'nome' => 'PHP'
                ],
                [
                    'nome' => 'Python'
                ]

            ]
        );
    }
}
