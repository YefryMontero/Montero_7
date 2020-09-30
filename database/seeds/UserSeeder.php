<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'Yefry Montero',
            'tipo_id' => 'Cedula de Ciudadania',
            'num_id' => '1114391757',
            'celular' => '3128713635',
            'direccion' => 'Mozambique',
            'email' => 'yefry.montero@correounivalle.edu.co',
            'password' => bcrypt('6423')
        ]);
    }
}
