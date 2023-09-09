<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = [
            ['id' => 1, 'name' => 'admin', 'guard_name' => 'web', 'created_at' => '2023-03-09 17:48:35', 'updated_at' => '2023-03-09 17:48:35'],
            ['id' => 2, 'name' => 'user', 'guard_name' => 'web', 'created_at' => '2023-03-09 17:48:35', 'updated_at' => '2023-03-09 17:48:35'],

        ];

        DB::table('roles')->insert($roles);


    }
}