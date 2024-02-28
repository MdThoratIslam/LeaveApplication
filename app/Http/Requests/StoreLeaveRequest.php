<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeaveRequest extends FormRequest
{
    /**
     * Determine if the users is authorized to make this request.
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
            'type'                              => 'required|integer',
            'total_days'                        => 'integer|min:1',
            'reason'                            => 'required',
            'starting_date'                     => 'required|date',
            'resumption_date'                   => 'required|date|after_or_equal:starting_date',
            'user_id'                           => 'required|exists:users,id',
//            'recommending_authority_status'     => 'nullable|integer|in:0,1',
//            'recommending_authority_id'         => 'nullable|exists:users,id',
//            'recommending_date'                 => 'nullable|date',
//            'approving_authority_status'        => 'nullable|integer|in:0,1',
//            'approving_authority_id'            => 'nullable|exists:users,id',
//            'approving_date'                    => 'nullable|date',
        ];
    }
}
