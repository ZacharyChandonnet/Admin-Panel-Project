<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreForfaitRequest extends FormRequest
{
    public $baseRules = [
        'nom' => ['required'],
        'description' => ['required'],
        'type' => ['required'],
        'prix' => ['required'],
        'emplacement' => ['required'],
        'date_debut' => ['required'],
        'date_fin' => ['required'],
        'dispo' => ['required'],
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
