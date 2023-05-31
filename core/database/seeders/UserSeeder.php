<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create the super administrator user
        $user = User::create([
            'name' => 'Nesru S',
            'email' => 'nesrusadik0@gmail.com',
            'phone' => '0940678725',
            'password' => Hash::make('password'),
        ]);
        $role = Role::where('slug', 'super-admin')->first();
        $user->roles()->attach($role);
    }
}
