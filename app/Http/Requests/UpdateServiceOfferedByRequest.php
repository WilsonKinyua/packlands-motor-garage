<?php

namespace App\Http\Requests;

use App\Models\ServiceOfferedBy;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateServiceOfferedByRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('service_offered_by_edit');
    }

    public function rules()
    {
        return [
            'expert_id' => [
                'required',
                'integer',
            ],
            'services.*' => [
                'integer',
            ],
            'services' => [
                'required',
                'array',
            ],
        ];
    }
}
