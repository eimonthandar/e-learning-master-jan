<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class RequestLearningActivity extends FormRequest
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

        $rules = [
            'title' => 'required|string',
            'description' => 'nullable|string',
            'course_id' => 'required|integer|min:1',
            'lecture_id' => 'nullable|integer|min:1',
        ];
        
        return $rules;
    }

}
