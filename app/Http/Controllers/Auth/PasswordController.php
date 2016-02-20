<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use App\User;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{


    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;


    /**
     *
     */
    public function postReset()
    {

        $user 			= User::find($this->getEmail());

        // Get passwords from the user's input
        $old_password 	= Input::get('password');
        $password 		= Input::get('password');

        // test input password against the existing one
        if(Hash::check($old_password, $user->getAuthPassword())){
            $user->password = Hash::make($password);


            // save the new password
            if($user->save()) {
                return Redirect::route('users.login')
                    ->with('flash', 'Your password has been reset');
            }
        } else {
            return Redirect::route('password.reset')
                ->with('global', 'Your old password is incorrect.');
        }

    }

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
