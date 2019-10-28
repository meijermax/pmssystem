<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ProfilesController extends Controller
{
    public function index($user)
    {
//        $role = Role::create(['name' => 'writer']);
//        $permission = Permission::create(['name' => 'edit post']);
//
//        $role = Role::findById('1');
//        $permission = Permission::findById('1');
//
//        $role->givePermissionTo($permission);


//        auth()->user()->givePermissionTo('edit post');

//        auth()->user()->assignRole('writer');

//        return auth()->user()->permissions;


//        $permission = Permission::create(['name'=>'create post']);
//
//        $role = Role::findById(1);
//
//        $role->givePermissionTo($permission);

//        return auth()->user()->getPermissionsViaRoles();

        $user = User::findOrFail($user);
        return view('profiles.index', [
            'user' => $user,
        ]);
    }
}
