<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequestNews extends Request
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
           'topic_name'=>'required|min:15',
            'topic_description'=>'required|min:250',
            'date'=>'required|date|date_format:Y-m-d',
            'created_by'=>'reuired|min:12'
        ];
    }
    public  function messages()
    {
        return $messages = array(
            'topic_name.required'    => 'The topic name must be required.',
            'topic_name.min:15'    => 'The topic name must have 15 characters',

        );
    }
}
