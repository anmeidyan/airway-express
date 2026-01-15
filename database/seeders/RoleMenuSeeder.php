<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Menu;

class RoleMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin = Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $user = Role::create(['name' => 'User']);

        $dashboard = Menu::create([
            'name' => 'Dashboard',
            'route' => 'admin.dashboard',
            'icon' => 'dashboard-icon',
        ]);

        $users = Menu::create([
            'name' => 'Users',
            'route' => 'admin.users',
            'icon' => 'users-icon',
        ]);

        $superadmin->menus()->attach([$dashboard->id, $users->id]);
        $admin->menus()->attach([$dashboard->id, $users->id]);
        $user->menus()->attach([$dashboard->id]);
    }
}
