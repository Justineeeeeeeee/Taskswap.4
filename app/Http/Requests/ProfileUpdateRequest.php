<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required', 'string', 'max:255'],
            'bio' => ['required', 'string', 'max:255'],
            'education' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'notes' => ['required', 'string', 'max:255'],
            'skills' => ['required', 'string', 'max:255'],
            'profile_pic' => ['nullable|mimes:png,jpg,jpeg,webp'],
        ];

       
    }
}
