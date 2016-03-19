<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ChangePassword;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\User;

use Illuminate\Support\Facades\Password;

class UserController extends Controller
{
    /**
     * render user register
     * @param int $id
     * @return array
     **/
    public function register()
    {
        return view('users.register');
    }

    /**
     * user login
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login()
    {
        return view('users.login');
    }

    /**
     * render view for forget password
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function forget()
    {
        return view('users.forget');
    }

    /**
     * register success
     * encode password
     * @param RegisterRequest $RegisterRequest
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function registerSuccess(RegisterRequest $RegisterRequest)
    {
        try {
            \DB::beginTransaction();
            $inputs = \Request::all();
            $inputs['password'] = bcrypt($inputs['password']);
            User::create($inputs);
            return view('users.registersuccess');
            \DB::commit();
        }
        catch (\Exception $e) {

            \DB::rollBack();
        }
    }

    /**
     * auntheticate user to login
     * @return mixed
     */
    public function authenticate()
    {
        try {
            \DB::beginTransaction();
            $credentials = array(
                'email' => Input::get('email'),
                'password' => Input::get('password'));
            if (\Auth::attempt($credentials))
            {
                return Redirect::to(route('dashboard.index'));
            } else {
                return Redirect::back()->withErrors(['msg', 'The invalid user name and password']);
            }
            \DB::commit();
        } catch (\Exception $e) {
            //echo $e->getMessage();
            \DB::rollBack();
        }
    }


    /**
     * update password using token
     * @return Redirect to login page
     */
    public function changePassword1()
    {
        try {
            \DB::beginTransaction();
            $inputs = \Input::all();
            User::where('token', $inputs['token'])->where('user_id', $inputs['user_id'])
                ->update(['password' => \Hash::make($inputs['new_password']), 'token' => null]);
            \Session::flash('flash_message', 'Password changed successfully');
            return redirect(route('users.login'));
            \DB::commit();
        }
        catch (\Exception $e) {
           // echo $e->getMessage();
            \DB::rollBack();
        }
       }

    /**
     * fetch token from database
     *
     * @param $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function resetPassword($token)
    {
        try {
            \DB::beginTransaction();
            if ($token != '') {
                $userInfo = User::where('token', $token)->first();
                if ($userInfo) {
                    $userId = $userInfo->user_id;
                    return view('users.reset_password', compact('token', 'userId'));
                } else {
                    echo 'token is incorrect';
                }
            } else {
                echo 'token is invalid';
            }
            \DB::commit();
        }
    catch (\Exception $e) {
        //echo $e->getMessage();
        \DB::rollBack();
    }

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function changePassword()
    {

        return view('users.change_password');

    }
    ##ChangePassword $request
    public function postChangePassword()
    {
        $userID = 2 ;
        // Grab the current user

        // Get passwords from the user's input
        $old_password 	= trim(Input::get('old_password'));


        $oldPassword = bcrypt($old_password);

        $password 		= Input::get('new_password');
        $user 			= User::where('user_id', $userID)->where('password', $oldPassword)->first();
        dd($user);
        // test input password against the existing one
        if(Hash::check($old_password, $user->getAuthPassword())){
            $user->new_password = Hash::make($password);

            // save the new password
            if($user->save()) {
                return Redirect::route('users.login')
                    ->with('global', 'Your password has been changed.');
            }
        } else {
            return Redirect::route('users.change_Password')
                ->with('global', 'Your old password is incorrect.');
        }
    }

    /**
     * check email
     * use inbuilt function
     * update token in database
     */
    public function reset()
    {
        try {
            \DB::beginTransaction();
            $inputs = \Input::all();

            $userInfo = User::where('email', $inputs['email'])->first();
            $userId = $userInfo->user_id;

            $tokenId = str_random(50);
            User::where('user_id', $userId)->update(['token' => $tokenId]);
            \DB::commit();
        }
        catch (\Exception $e) {
            echo $e->getMessage();
            \DB::rollBack();
        }
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
