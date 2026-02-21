<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions= [
            "role.view",
            "role.create",
            "role.edit",
            "role.delete",
            
            "gt-users.view",
            "gt-users.create",
            "gt-users.edit",
            "gt-users.destroy"
        ];

        foreach($permissions as $permission){
            Permission::create(['name' => $permission]);
        }
    }
}
