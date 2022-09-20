<?php

namespace App\Domain\Activities\ActivityLog\Model;

use AliSuliman\MicroFeatures\Models\MicroModel;
use App\Domain\Activities\ActivityTypes\ActivityTypes\Model\ActivityType;
use App\Domain\Activities\Browsers\BrowserVersions\Model\BrowserVersion;
use App\Domain\Activities\Devices\Model\Device;
use App\Domain\Activities\Platforms\PlatformVersions\Model\PlatformVersion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityLog extends MicroModel
{
    use HasFactory;

    public $timestamps = false;

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

        public function activity_type(){
            return $this->belongsTo(ActivityType::class);
        }

    public function platform_version()
    {
        return $this->belongsTo(PlatformVersion::class, 'platform_version_id');
        }
    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id');
        }

    public function browser_version()
    {
        return $this->belongsTo(BrowserVersion::class, 'browser_version_id');
        }
}
