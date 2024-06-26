<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Branch;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Branch::create([
            'city_id' => 1,
            'township_id' => 2,
            'name' => 'YanKin Branch',
        ]);
        Department::create([
            'city_id' => 1,
            'township_id' => 2,
            'branch_id' => 1,
            'name' => 'IT Department',
        ]);
        \App\Models\User::create([
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => bcrypt('12345'),
            'first_name' => 'first_name',
            'last_name' => 'last_name',
            'full_name' => 'full_name',
            'date_of_birth' => '1999-06-01',
            'nrc' => '12/PABATA(N)5675678',
            'gender' => 'male',
            'nationality' => 'myanmar',
            'marital_status' => 'single',
            'user_type' => 'admin',
            'is_operation' => 1,
            'degree' => 'degree',
            'phone_1' => '09123123123',
            'phone_2' => '09456456456',
            'address' => 'address',
            'father_name' => 'father_name',
            'contact_phone' => '09789789789',
            'start_date' => '2023-05-01',
            'position' => 'Web Developer',
            'city_id' => 1,
            'township_id' => 2,
            'branch_id' => 1,
            'department_id' => 1,
        ]);
    }
}
