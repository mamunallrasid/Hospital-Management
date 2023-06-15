<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'category' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'status' =>'required'
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'role_id.required' => 'Please Select Role Type',
    //         // 'permission_id.required'  => 'Please Select Minimun One Permission !',
    //     ];
    // }

    /**
     * Summary of failedValidation
     * @param Validator $validator
     * @throws HttpResponseException
     * @return never
     */
    public function failedValidation(Validator $validator)
    {
        $valid = "";
        $message = json_decode($validator->errors());
        $i = 0;
        foreach ($message as $key => $value) {
            $valid .= "<span>".$value[$i]."</span><br>";

        }
        throw new HttpResponseException(response()->json([
            'status'=>false,
            'redirect'=>false,
            'reload'=>false,
            'valid'=>false,
            'message'=>$valid
        ]));

    }
}
