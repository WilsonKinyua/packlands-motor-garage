<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceOfferedBy extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'service_offered_bies';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'expert_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function expert()
    {
        return $this->belongsTo(User::class, 'expert_id');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
