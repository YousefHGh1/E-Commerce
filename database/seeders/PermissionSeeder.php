<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [
            ['id' => 1, 'name' => 'index categories', 'guard_name' => 'web', 'created_at' => '2023-03-09 00:04:10', 'updated_at' => '2023-03-09 00:04:10'],
            ['id' => 2, 'name' => 'store categories', 'guard_name' => 'web', 'created_at' => '2023-03-09 00:04:18', 'updated_at' => '2023-03-09 00:04:18'],
            ['id' => 3, 'name' => 'update categories', 'guard_name' => 'web', 'created_at' => '2023-03-09 00:04:24', 'updated_at' => '2023-03-09 00:04:24'],
            ['id' => 4, 'name' => 'delete categories', 'guard_name' => 'web', 'created_at' => '2023-03-09 00:04:31', 'updated_at' => '2023-03-09 00:04:31'],

            ['id' => 5, 'name' => 'index permissions', 'guard_name' => 'web', 'created_at' => '2023-05-23 14:13:47', 'updated_at' => '2023-05-23 14:13:47'],
            ['id' => 6, 'name' => 'store permissions', 'guard_name' => 'web', 'created_at' => '2023-05-23 14:13:47', 'updated_at' => '2023-05-23 14:13:47'],
            ['id' => 7, 'name' => 'update permissions', 'guard_name' => 'web', 'created_at' => '2023-05-23 14:22:11', 'updated_at' => '2023-05-23 14:22:11'],
            ['id' => 8, 'name' => 'delete permissions', 'guard_name' => 'web', 'created_at' => '2023-05-23 14:22:11', 'updated_at' => '2023-05-23 14:22:11'],

            ['id' => 9, 'name' => 'index roles', 'guard_name' => 'web', 'created_at' => '2023-05-23 14:13:47', 'updated_at' => '2023-05-23 14:13:47'],
            ['id' => 10, 'name' => 'store roles', 'guard_name' => 'web', 'created_at' => '2023-05-23 14:13:47', 'updated_at' => '2023-05-23 14:13:47'],
            ['id' => 11, 'name' => 'update roles', 'guard_name' => 'web', 'created_at' => '2023-05-23 14:22:11', 'updated_at' => '2023-05-23 14:22:11'],
            ['id' => 12, 'name' => 'delete roles', 'guard_name' => 'web', 'created_at' => '2023-05-23 14:22:11', 'updated_at' => '2023-05-23 14:22:11'],

            ['id' => 13, 'name' => 'index users', 'guard_name' => 'web', 'created_at' => '2023-05-23 14:13:47', 'updated_at' => '2023-05-23 14:13:47'],
            ['id' => 14, 'name' => 'store users', 'guard_name' => 'web', 'created_at' => '2023-05-23 14:13:47', 'updated_at' => '2023-05-23 14:13:47'],
            ['id' => 15, 'name' => 'update users', 'guard_name' => 'web', 'created_at' => '2023-05-23 14:22:11', 'updated_at' => '2023-05-23 14:22:11'],
            ['id' => 16, 'name' => 'delete users', 'guard_name' => 'web', 'created_at' => '2023-05-23 14:22:11', 'updated_at' => '2023-05-23 14:22:11'],

        ];

        DB::table('permissions')->insert($permissions);
    }
}