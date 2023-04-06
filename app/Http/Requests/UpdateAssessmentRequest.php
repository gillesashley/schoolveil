<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAssessmentRequest extends FormRequest
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
            'score' => 'required|numeric|min:0|max:100',
            'score_over' => 'required|numeric|min:0|max:100',
            'subject_id' => 'required|exists:subjects,id',
            'students.*' => 'required|exists:students,id',
        ];
    }
}
