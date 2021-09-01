<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Booking extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;
    use HasFactory;

    public $table = 'bookings';

    protected $dates = [
        'preffered_date_time_of_booking',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'car_name',
        'car_type',
        'car_year',
        'car_model',
        'type_of_service_id',
        'number_of_wheels',
        'extra_services',
        'preffered_date_time_of_booking',
        'name',
        'email',
        'phone',
        'address',
        'message',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function type_of_service()
    {
        return $this->belongsTo(Service::class, 'type_of_service_id');
    }

    public function getPrefferedDateTimeOfBookingAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setPrefferedDateTimeOfBookingAttribute($value)
    {
        $this->attributes['preffered_date_time_of_booking'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
