<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssessmentRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'assessment_name' => 'required',
            'score' => 'required|integer|min:0|max:100',
            'score_over' => 'required|integer|min:0|max:100',
            'subject' => 'required|exists:subjects,name',
            'scores.*' => 'required|integer|min:0|max:100',
        ];
    }
}
