<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'fullname' => ['required', 'string'],
            'phone'    => ['required', 'string'],
            'email'    => ['required', 'string', 'email', 'unique:users'],
            'username' => ['required', 'string', 'min:8', 'max:40', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:3'],
        ];
    }
    public function messages()
    {
        return [
            'fullname.required' => trans('validation.required'),
            'phone.required'    => trans('validation.required'),
            'email.required'    => trans('validation.required'),
            'email.unique'      => trans('validation.unique'),
            'username.required' => trans('validation.required'),
            'username.min'      => trans('validation.min'),
            'username.max'      => trans('validation.max'),
            'username.unique'   => trans('validation.unique'),
            'password.min'      => trans('validation.min'),
            'password.required' => trans('validation.required'),
            'password.confirmed'=> trans('validation.confirmed'),
            'password_confirmation.required' => trans('validation.required'),
            'password_confirmation.min'      => trans('validation.min'),
        ];
    }
}
