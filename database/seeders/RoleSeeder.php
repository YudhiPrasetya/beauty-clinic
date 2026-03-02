<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roles = [
            [
                'role' => 'admin',
                'description' => 'Dapat mengakses semua role'
            ],
            [
                'role' => 'registrasi',
                'description' => 'Hanya dapat mengakses role registrasi/pendaftaran pasien'
            ],
            [
                'role' => 'dokter',
                'description' => 'Hanya dapat mengakses role dokter'
            ],
            [
                'role' => 'beauty_skin',
                'description' => 'Hanya dapat mengakses role beauty_skin'
            ],
            [
                'role' => 'apotek',
                'description' => 'Hanya dapat mengakses role apotek'
            ],
            [
                'role' => 'kasir',
                'description' => 'Hanya dapat mengakses role kasir'
            ],
            [
                'role' => 'gudang',
                'description' => 'Hanya dapat mengakses role gudang'
            ],
        ];
        foreach($roles as $role){
            Role::create($role);
        }
    }
}
