<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentaiteRequest extends FormRequest
{
     public $baseRules = [
        'commentaire' => ['required'],
        'date' => ['required'],
        'cote' => ['required'],
    ];

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
        $rules = $this->baseRules;
        return $rules;
    }
}
