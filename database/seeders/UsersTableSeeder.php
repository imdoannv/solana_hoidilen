<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Tạo bản ghi đầu tiên
        DB::table('users')->insert([
            'referenceId' => Str::random(5), // Chuỗi 5 kí tự
            'name' => 'admin',
            'point' => 0,
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Admin123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Thêm mã nguồn để tạo các bản ghi khác nếu cần
    }
}
