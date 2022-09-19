<?php

namespace App\Domain\Activities\Platforms\Platforms\Model;

use AliSuliman\MicroFeatures\Models\MicroModel;
use App\Domain\Activities\Platforms\PlatformVersions\Model\PlatformVersion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Platform extends MicroModel
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

    public function versions()
    {
        return $this->hasMany(PlatformVersion::class, 'platform_id');
    }
}
