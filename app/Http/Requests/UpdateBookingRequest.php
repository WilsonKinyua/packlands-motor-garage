<?php

namespace App\Http\Requests;

use App\Models\Booking;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBookingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('booking_edit');
    }

    public function rules()
    {
        return [
            'car_name' => [
                'string',
                'required',
            ],
            'car_type' => [
                'string',
                'required',
            ],
            'car_year' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'car_model' => [
                'string',
                'nullable',
            ],
            'type_of_service_id' => [
                'required',
                'integer',
            ],
            'number_of_wheels' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'preffered_date_time_of_booking' => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'name' => [
                'string',
                'required',
            ],
            'phone' => [
                'string',
                'required',
            ],
            'address' => [
                'string',
                'required',
            ],
        ];
    }
}
