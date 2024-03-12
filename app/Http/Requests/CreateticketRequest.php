<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateticketRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'serialNumber' => 'required',
            'fullName' => 'required',
            'dob' => 'required|date'
            // 'departureLocation' => 'required',
            // 'destinationLocation' => 'required',
            // 'departDate' => 'required',
            // 'departureTime' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'serialNumber' => 'serial number',
            'fullName' => 'full name',
            'dob' => 'date of birth'
            // 'departureLocation' => 'departure location',
            // 'destinationLocation' => 'destination location',
            // 'departDate' => 'departure date',
            // 'departureTime' => 'departure time'
        ];
    }
}
