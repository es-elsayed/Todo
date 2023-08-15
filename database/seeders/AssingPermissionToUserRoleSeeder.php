<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class AssingPermissionToUserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->permissions() as $permission) {
            Permission::findByName($permission)->assignRole('user');
        }
    }

    private function permissions(): array
    {

        return [
            'users-create',
            'users-read',
            'users-update',
            'users-delete',
        ];

    }
}
