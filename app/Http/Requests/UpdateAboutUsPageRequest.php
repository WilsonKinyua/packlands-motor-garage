<?php

namespace App\Http\Requests;

use App\Models\AboutUsPage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAboutUsPageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('about_us_page_edit');
    }

    public function rules()
    {
        return [
            'description' => [
                'required',
            ],
        ];
    }
}
