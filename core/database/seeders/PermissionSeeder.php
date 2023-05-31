<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Permission::truncate();
        Schema::enableForeignKeyConstraints();

        Permission::insert([
            ['name' => 'Edit role', 'slug' => 'edit-role', 'description' => 'Enables a user to edit/update the names of roles'],
        ]);
    }
}
