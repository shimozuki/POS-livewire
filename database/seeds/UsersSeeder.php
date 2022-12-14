<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'level' => 'Admin',
            'address' => 'alamat admin',
            'phone' => '081211112222',
            'image' => '/images/users/1__-vJQqeCmpw-kghDFX8yJw.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Robbi',
            'username' => 'shimozuki',
            'email' => 'shimozuki@gmail.com',
            'password' => bcrypt('Robbi'),
            'level' => 'Admin',
            'address' => 'jl.raya bikini bottom',
            'phone' => '081211112222',
            'image' => '/images/users/1__-vJQqeCmpw-kghDFX8yJw.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Kasir',
            'username' => 'kasir',
            'email' => 'kasir@gmail.com',
            'password' => bcrypt('kasir'),
            'level' => 'Kasir',
            'address' => 'alamat kasir',
            'phone' => '081211112222',
            'image' => '/images/users/1__-vJQqeCmpw-kghDFX8yJw.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
