<?php

use App\Models\User;
use App\Models\Role;
use App\Models\RoleUser;

function CheckRole( $roles = [] )
{
    if( ! empty($roles) && Auth::check() ) {
        // Get the current user
        $user = Auth::user(); 

        // Get the user's role ID from the role_user table
        $roleId = RoleUser::where('user_id', $user->id)->first()->role_id;

        // Get the user's role name from the roles table
        $role = Role::find($roleId)->name;

        // Check if the user has one of the required roles
        foreach ($roles as $role_key => $role_value) {
            if( $role ==  $role_value) {
                return true;
            }
        }
    }

    return false;
}