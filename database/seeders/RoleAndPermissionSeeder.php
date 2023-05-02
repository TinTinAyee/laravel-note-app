<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin =Role::create(['name'=>'SuperAdmin']);

        $editor = Role::create(['name'=>'Editor']);

        $dasboard = Permission::create(['name'=>'dasboard']);
        $widget = Permission::create(['name'=>'widget']);
        $blog_list= Permission::create(['name'=>'blogList']);
        $blog_create= Permission::create(['name'=>'blogCreate']);
        $blog_edit= Permission::create(['name'=>'blogEdit']);
        $blog_show= Permission::create(['name'=>'blogShow']);
        $blog_delete= Permission::create(['name'=>'blogDelete']);

        // $authorization = Permission::create(['name'=>'authorization']);

        $super_admin -> givePermissionTo([$dasboard,$widget,$blog_list,$blog_create,$blog_edit,$blog_show,$blog_delete]);

        $editor -> givePermissionTo([$blog_list,$blog_create,$blog_edit,$blog_show]);
    }
}