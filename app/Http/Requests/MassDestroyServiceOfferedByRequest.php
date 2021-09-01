<?php

namespace App\Http\Requests;

use App\Models\ServiceOfferedBy;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyServiceOfferedByRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('service_offered_by_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:service_offered_bies,id',
        ];
    }
}
