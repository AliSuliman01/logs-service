<?php

namespace App\Domain\Activities\Platforms\PlatformVersions\Model;

use AliSuliman\MicroFeatures\Models\MicroModel;
use App\Domain\Activities\Platforms\Platforms\Model\Platform;
use App\Models\SmartModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlatformVersion extends MicroModel
{
    use HasFactory, SoftDeletes;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_user_id',
        'updated_by_user_id',
        'deleted_by_user_id',
    ];

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }
}
