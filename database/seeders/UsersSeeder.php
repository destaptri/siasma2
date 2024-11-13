<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
    // Creating Super Admin User
    $superAdmin = User::create([
        'name' => 'BK',
        'email' => 'superadmin@roles.id',
        'password' => Hash::make('123456'),
        'nisn' => null,
        'nip'=> '123456789123456789'
        ]);
    $superAdmin->assignRole('Super Admin');

        // Creating Admin Users individually
$admin1 = User::create([
    'name' => 'Admin 1',
    'email' => 'admin1@example.com',
    'nip' => '223456789012345678',
    'password' => Hash::make('123456')
]);
$admin1->assignRole('Admin');

$admin2 = User::create([
    'name' => 'Admin 2',
    'email' => 'admin2@example.com',
    'nip' => '323456789012345678',
    'nisn' => null,
    'password' => Hash::make('123456')
]);
$admin2->assignRole('Admin');

$admin3 = User::create([
    'name' => 'Admin 3',
    'email' => 'admin3@example.com',
    'nip' => '423456789012345678',
    'nisn' => null,
    'password' => Hash::make('123456')
]);
$admin3->assignRole('Admin');

$kepalasekolah = User::create([
    'name' => 'Kepala Sekolah',
    'email' => 'kepalasekolah@roles.id',
    'password' => Hash::make('123456'),
    'nisn' => null,
    'nip'=> '123456789123456788'
    ]);
$kepalasekolah->assignRole('Kepala Sekolah');
       
    // Creating Alumni
       
    // Creating Alumni
    for ($i = 1; $i <= 5; $i++) {
        $alumni = User::create([            
            'name' => 'Alumni ' . $i,
            'email' => 'alumni' . $i . '@example.com',
            'nip' => null,
            'nisn' => '987654321' . $i,
            'password' => Hash::make('123456')
        ]);
        $alumni->assignRole('Alumni');
    }
    
}}