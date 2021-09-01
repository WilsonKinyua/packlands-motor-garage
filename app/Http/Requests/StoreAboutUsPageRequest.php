<?php

namespace App\Http\Requests;

use App\Models\AboutUsPage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAboutUsPageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('about_us_page_create');
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
