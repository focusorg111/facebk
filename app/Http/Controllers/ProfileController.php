<?php

namespace App\Http\Controllers;
use App\CollegeInfo;
use App\EmployeeInfo;
use App\Hobbies;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use Yajra\Datatables\Datatables;


class ProfileController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewProfile($id)
    {
        return view('profile.view_profile', compact('id'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editProfile($id)
    {
        $user = User::find($id);
        return view('profile.edit_profile' ,compact('user'));
    }

    /**
     *ProfileRequest $request
     */
    public function saveProfile($id)
    {

        $inputs= \Input::all();
        $UserInfo=['first_name' => $inputs['first_name'],'last_name' => $inputs['last_name'],
                'marital_status' => $inputs['marital_status'],'date_of_birth' => $inputs['date_of_birth'],
                'hometown' => $inputs['hometown'],'current_location' => $inputs['current_location']];
        User::where('user_id', $id)->update($UserInfo);

        $collegeDetails = [
            'user_id' => $id,
            'college_name' => $inputs['college_name'],
            'passing_year' => $inputs['passing_year'],
            'course' => $inputs['course']
        ];
        $CollegeInfo = CollegeInfo::where('user_id', $id)->select('user_id')->first();
        if ($CollegeInfo) {
            CollegeInfo::where('user_id', $id)->update($collegeDetails);
        } else {
            CollegeInfo::create($collegeDetails);
        }

        EmployeeInfo::create(['user_id' => $id,'current_employee' => $inputs['current_employee'],'working_since' => $inputs['working_since'],'designation' => $inputs['designation']]);
        Hobbies::create(['user_id' => $id,'option_1' => $inputs['option_1'],'option_2' => $inputs['option_2'],'option_3' => $inputs['option_3']]);
    }
    /*
     *
     */
    public function showRegistered()
    {
        return view('profile.show_registered_user');
    }
    public function RegisteredData()
    {
        return Datatables::of(User::select(['user_id','email','first_name','created_at','updated_at']))->addColumn('action','<a href="{{route("users.view.profile",$user_id)}}">View Profile</a>')
            ->removeColumn('user_id')
            ->editColumn('first_name','@if($first_name)
                                 {{$first_name}}
                             @else
                                Not Applicable
                            @endif')
            ->make(true);
    }
    public function registeredList()
    {
            $users = User::all();
            return view('profile.register_list', compact('users'));

    }





}
