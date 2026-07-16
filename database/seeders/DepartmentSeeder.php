<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create(['name'=> 'Sistem Informasi', 'nim' => 1]);
        Department::create(['name'=> 'Teknik Informatika', 'nim' => 2]);
        Department::create(['name'=> 'Teknologi Informasi', 'nim' => 3]);
        Department::create(['name'=> 'Pendidikan Teknologi Informasi', 'nim' => 4]);
        Department::create(['name'=> 'Bisnis Digital', 'nim' => 5]);
        Department::create(['name'=> 'Magister Komputer', 'nim' => 6]);
    }
}
