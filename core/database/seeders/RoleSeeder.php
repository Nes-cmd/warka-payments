<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        Role::insert([
            ['name' => 'Super adminstrator', 'slug' => 'super-admin', 'description' => 'Is super admin all across the system'],
            ['name' => 'Adminstrator', 'slug' => 'admin', 'description' => 'Is admin for previlages gigen by the super admin.'],
        ]);

        $superAdminPermission = Permission::all();
        Role::where('slug', 'super-admin')->first()->permissions()->attach($superAdminPermission->map(fn($row) => $row->id));
    }
}
