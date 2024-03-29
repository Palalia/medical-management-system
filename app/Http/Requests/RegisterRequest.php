<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
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
        log::debug("dentro de registerrequest");
        return [
                'email' => 'required|email:rfc,dns|unique:users,email',
                'username' => 'required|unique:users,username',
                'password1' => 'required|min:5',
                'password2' => 'required|same:password'
        ];
    }
}
