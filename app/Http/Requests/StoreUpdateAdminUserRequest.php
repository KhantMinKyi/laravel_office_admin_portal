<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateAdminUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required', 'string', Rule::unique('users', 'username')->ignore($this->id, 'id')],
            'password' => 'required|min:5|max:40',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            // 'full_name' =>'required|string',
            'date_of_birth' => 'required',
            'nrc' => 'nullable',
            'gender' => 'required',
            'nationality' => 'nullable|string',
            'marital_status' => 'required',
            'degree' => 'nullable|string',
            'phone_1' => 'required|string',
            'phone_2' => 'nullable|string',
            'email' => ['required', 'string', Rule::unique('users', 'email')->ignore($this->id, 'id')],
            // 'email_verified_at' =>'required',
            'address' => 'required|string',
            'father_name' => 'required|string',
            'contact_phone' => 'nullable|string',
            'start_date' => 'required|string',
            'position' => 'nullable|string',
            'city_id' => 'required|exists:App\Models\City,id',
            'township_id' => 'required|exists:App\Models\Township,id',
            'branch_id' => 'required|exists:App\Models\Branch,id',
            'department_id' => 'required|exists:App\Models\Department,id',
        ];
    }
}
