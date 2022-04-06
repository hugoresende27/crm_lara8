<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::updateOrCreate(['id'=>1], [
            'name'=>'admin',
            'email'=>'a@a',
            'password'=>bcrypt('1111'),
            // 'password'=>'$2y$10$eCX8MhIMhAp.bLLyc7KeJuoveerF8t3vs03kgwdDyDjjlfNIfRKiq'
        ]);
    }
}
