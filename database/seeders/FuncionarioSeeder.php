<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("pt_BR");


        foreach(\range(1,5) as $index){

            DB::table('funcionario')->insert(
                [
                    'nome'=>$faker->name,
                    'cpf'=>$faker->phoneNumber
                    ,
                    'cargo'=>$faker->name,
                ]
            );
        }
    }
}
