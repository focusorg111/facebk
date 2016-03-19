<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProfileRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' =>'required',
            'last_name' =>'required',
            'display_name' =>'required',
            'marital_status' =>'required',
            'date_of_birth' => 'required|date|date_format:Y-m-d',
           'hometown' => 'required',
            'current_location' =>'required',
            'college_name' =>'required',
            'passing_year' =>'required',
            'course' =>'required',
            'current_employee' =>'required',
            'working_since' =>'required',
            'designation' =>'required',
            'option_1' =>'required',
            'option_2' =>'required',
            'option_3' =>'required'

        ];
    }
}
