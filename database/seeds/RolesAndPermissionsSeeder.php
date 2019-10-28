<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');


//        Role::create(['name' => 'test']);
//        /** @var \App\User $user */
//        $user = factory(\App\User::class)->create();
//
//        $user->assignRole('test');
        Role::create(['name' => 'admin']);

        /** @var \App\User $user */
        $admin = factory(\App\User::class)->create([
            'name' => 'John Doe',
            'username' => 'John',
            'email' => 'john@example.com',
        ]);

        $admin->assignRole('admin');
    }
}
