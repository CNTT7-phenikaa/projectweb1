<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'          => 'Nguyen Van A',
            'email'         => 'nguyenvana@example.com',
            'password'      => bcrypt('123456'),
            'phone_number'  =>'0123456789',
            'status'        => 'pending',
            'avatar'        =>'',
            'address'       =>'Da Nang, Viet Nam',
            'role_id'       => 1,
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        User::create([
            'name'          => 'Tran Thi B',
            'email'         => 'tranthib@example.com',
            'password'      => bcrypt('123456'),
            'phone_number'  =>'09372012634',
            'status'        => 'pending',
            'avatar'        =>'',
            'address'       =>'Ninh Binh, Viet Nam',
            'role_id'       => 2,
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        User::create([
            'name'          => 'Nguyen Quynh Trang',
            'email'         => 'nguyenquynhtrang@example.com',
            'password'      => bcrypt('123456'),
            'phone_number'  =>'0973257011',
            'status'        => 'pending',
            'avatar'        =>'',
            'address'       =>'Ha Noi, Viet Nam',
            'role_id'       => 3,
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);
    }
}
