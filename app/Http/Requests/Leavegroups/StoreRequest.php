<?php

namespace App\Http\Requests\Leavegroups;

use App\Traits\failedValidationWithName;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    use failedValidationWithName;
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            //'leave_type_id' => 'required',
            'company_id' => 'required',
            'group_name' => 'required',
            //'leave_type_count' => 'required',

        ];
    }
}
