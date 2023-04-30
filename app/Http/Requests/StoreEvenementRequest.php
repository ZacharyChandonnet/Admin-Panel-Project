<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEvenementRequest extends FormRequest
{
    public $baseRules = [
        'nom' => ['required'],
        'date_debut' => ['required'],
        'date_fin' => ['required'],
        'ville' => ['required'],
        'emplacement' => ['required'],
        'description' => ['required'],
        'prix' => ['required'],
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
