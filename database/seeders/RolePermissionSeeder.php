<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar permission
        $permissions = [
            'manage statistics',
            'manage products',
            'manage principles',
            'manage testimonials',
            'manage clients',
            'manage teams',
            'manage abouts',
            'manage appointments',
            'manage hero sections',
        ];

        // Tambahkan permission
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Buat role
        $superAdminRole = Role::firstOrCreate(['name' => 'super_admin']);

        // Perbarui atau buat user
        $user = User::updateOrCreate(
            ['email' => 'syahbudin45@gmail.com'], // Kriteria pencarian
            [
                'name' => 'rafly',
                'password' => bcrypt('123') // Jangan lupa untuk menggunakan bcrypt
            ]
        );

        // Assign role ke user
        $user->assignRole($superAdminRole);
    }
}
