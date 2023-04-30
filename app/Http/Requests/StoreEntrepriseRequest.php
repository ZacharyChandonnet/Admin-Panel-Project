<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntrepriseRequest extends FormRequest
{
    public $baseRules = [
        'nom' => ['required'],
        'type' => ['required'],
        'description' => ['required'],
        'specialite' => ['required'],
        'adresse' => ['required'],
        'email' => ['required'],
        'phone' => ['required'],
        'code_postal' => ['required'],
        'personne_ressource' => ['required'],
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
