<?php

namespace App\Http\Requests;


class UpdateActiviteRequest extends StoreActiviteRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = $this->baseRules;
        $rules["autre"] = 'required';
        unset($rules["autre"]);
        return $rules;
    }
}
