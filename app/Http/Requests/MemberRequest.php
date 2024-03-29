<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
        if ($this->route()->getName() == "register"){
            return [
                'name' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'account' => 'required',
                'password' => 'required',
                'mail' => 'required'
            ];
        } else if($this->route()->getName() == "login") {
            return [
                'account' => 'required',
                'password' => 'required'
            ];
        } else {
            return [
                //
            ];
        }
        
    }
}
