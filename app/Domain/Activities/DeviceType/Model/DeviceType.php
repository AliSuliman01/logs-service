<?php

namespace App\Domain\Activities\DeviceType\Model;

use AliSuliman\MicroFeatures\Models\MicroModel;
use App\Domain\Activities\Devices\Model\Device;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\SmartModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeviceType extends MicroModel
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'name',
        'parent_id',
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

    public function devices()
    {
        return $this->hasMany(Device::class);
    }
}
