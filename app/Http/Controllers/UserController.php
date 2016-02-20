<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * render user register
     * @param int $id
     * @return array
     **/
    public function register($id)
    {
        return view('users.register');
    }
    public function login()
    {
        return view('users.login');
    }

    public function forget()
    {
        return view('users.forget');
    }


    public function registersuccess(RegisterRequest $RegisterRequest)
    {

        $inputs = \Request::all();
        $inputs['password']=hash($inputs['password']);
        User::create($inputs);
        return view('users.registersuccess');

    }
    public function authenticate()
    {
        try {
            $credentials = array(
                'email' => Input::get('email'),
                'password' => Input::get('password'));
            if (\Auth::attempt($credentials))
            {
                return Redirect::to(route('dashboard.index'));
            } else {
                return Redirect::back()->withErrors(['msg', 'The invalid user name and password']);
            }

        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function reset()
    {
        $userName = "narayan";
        $email = "sharmanarayan1991@gmail.com";
        \Mail::send('email', ['user' => 'Narayan'], function ($m)  use ($userName, $email) {
            $m->from('hello@app.com', 'Your Application');
            $m->to($email, $userName)->subject('Your Reminder!');
        });
    }
    /**
     * users logout
     **/
    public function logout()
    {
        \Auth::logout();
        return Redirect::to(route('users.login'));
    }

}
