<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyRequest extends FormRequest
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
        return [
            'name'          => 'required|string|min:3|max:255|unique:companies',
            'activite'      => 'required',
            'date_creation' => 'required|date',
            'gerant'        => 'required',
            'ville'         => 'required',
            'paye'          => 'required',
            'adresse'       => 'required',
            'email'         => 'required',
            'tel'           => 'required',
            'tel_mobile'    => 'nullable',
            'fax'           => 'nullable',
            'ICE'           => 'nullable',
            'registre_commerce'=> 'nullable',
            'patent'        => 'nullable',
            'web'           => 'required',
        ];
    }
}






