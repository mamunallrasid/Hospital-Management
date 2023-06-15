<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

/**
 * Summary of AdminLoginRequest
 */
class AuthRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required||unique:customers,email',
            'mobile' => 'required',
            'password' => 'required|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6',
            'captcha' =>'required|captcha'
        ];
    }

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
