<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions=[
            'manager_users',
            'manager_products',
            'manager_order',
            'manager_category',
            'manager_contacts',
        ];

        foreach($permissions as $permission){
            Permission::create(['name' => $permission]);
        }
    }
}
