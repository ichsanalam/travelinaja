<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'manage categories',
            'manage packages',
            'manage transactions',
            'manage package banks',
            'checkout package',
            'view orders',
        ];

        foreach($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission
            ]);
        }

        // make customer role
        $customerRole = Role::firstOrCreate([
            'name' => 'customer'
        ]);

        $customerPermissions = [
            'checkout package',
            'view orders',
        ];

        $customerRole->syncPermissions($customerPermissions);


        // super admin role
        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin'
        ]);

        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'super@admin.com',
            'phone_number' => '0895123123',
            'avatar' => 'images/default-avatar.png',
            'password' => bcrypt('123123123')
        ]);
        $user->assignRole($superAdminRole);
    }
}
