<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */

    public function messages()
    {
        return [
            'name.required' => 'Please enter your name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Please enter your phone number.',
            'subject.required' => 'Please enter a subject.',
            'messageContent.required' => 'Please enter your message.',
        ];
    }


    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => ['required', 'regex:/^[0-9]{11}$/'], // 11-digit numeric phone number
            'subject' => 'required',
            'messageContent' => 'required',
        ];
    }
}
