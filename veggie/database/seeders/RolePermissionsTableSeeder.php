<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();
        $staffRole = Role::where('name', 'staff')->first();

        $permissions = Permission::all();

        //Admin có tất cả các quyền
        $adminRole->permissions()->sync($permissions);

        //Nhân viên có một số quyền
        $staffPermission = $permissions->whereIn('name', [
            'manager_products',
            'manager_contacts',
        ]);

        $staffRole->permissions()->sync($staffPermission);

    }
}
