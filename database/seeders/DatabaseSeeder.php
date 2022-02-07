<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Department;

use App\Models\Role;

use App\Models\User;

use App\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            GenderSeeder::class,
            DepartmentSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            PermissionSeeder::class,
        ]);  
    }
}
