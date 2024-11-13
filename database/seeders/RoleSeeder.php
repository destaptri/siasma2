<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $kepalasekolah = Role::create(['name' => 'Kepala Sekolah']);
        $alumni = Role::create(['name' => 'Alumni']);

        $admin->givePermissionTo([
            'create-biodata',
            'edit-biodata',
            'delete-biodata',
            'validate-biodata',
            'show-laporan'
        ]);

        $kepalasekolah->givePermissionTo([
            'show-laporan'
        ]);
        $alumni->givePermissionTo([
            'create-biodata',
            'edit-biodata',
            'delete-biodata',
            'edit-profile'
        ]);

    }
}