<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;



class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' => 'Carlos',

            'email' => 'admin@gmail.com',

            'status'=>'Activo',
            'foto'=>null,
            'rol'=>1,

            'password' => bcrypt('1234567'),

        ]);
       
    }
    
}
