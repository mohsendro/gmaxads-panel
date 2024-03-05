<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\RoleUser;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles = []): Response
    {
        if( ! empty($roles) ) {
            // Get the current user
            $user = Auth::user(); 

            // Get the user's role ID from the role_user table
            $roleId = RoleUser::where('user_id', $user->id)->first()->role_id;

            // Get the user's role name from the roles table
            $role = Role::find($roleId)->name;

            // Check if the user has one of the required roles
            if( ! empty($roles) ) { 
                $roles = explode('|', $roles);
                foreach ($roles as $role_key => $role_value) {
                    if( $role ==  $role_value) {
                        // return redirect('/');
                        return $next($request);
                    }
                }
            }
        }

        // // Continue to the next middleware
        return $next($request);
    }
}
