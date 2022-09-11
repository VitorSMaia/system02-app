<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::query();

//        $role->create([
//            'name' => 'Admin'
//        ]);
//        $role->create([
//            'name' => 'User'
//        ]);
//
//        $permission = Permission::query();
//
//        $permission->create([
//                'name' => 'create_post',
//                'guard_name' => 'web'
//            ]);
//
//        $permission->create([
//            'name' => 'create_comment_post',
//            'guard_name' => 'web'
//        ]);

        $role->find(2)->syncPermissions([1,2]);
    }
}
