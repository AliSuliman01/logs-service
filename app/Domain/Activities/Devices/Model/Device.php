<?php

namespace App\Domain\Activities\Devices\Model;

use AliSuliman\MicroFeatures\Models\MicroModel;
use App\Domain\Activities\DeviceType\Model\DeviceType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\SmartModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Device extends MicroModel
{
    use HasFactory,SoftDeletes;
    protected $table = "devices";

    protected $fillable = [
        'name',
        'parent_id',
        'region_id',
        'device_types_id',
        'created_by_user_id',
        'updated_by_user_id',
        'deleted_by_user_id',
    ];

    protected $hidden = [
        'created_by_user_id',
        'updated_by_user_id',
        'deleted_by_user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function device_type()
    {
        return $this->belongsTo(DeviceType::class);
    }
}
