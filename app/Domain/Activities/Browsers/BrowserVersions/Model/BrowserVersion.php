<?php

namespace App\Domain\Activities\Browsers\BrowserVersions\Model;

use AliSuliman\MicroFeatures\Models\MicroModel;
use App\Domain\Activities\Browsers\Browsers\Model\Browser;
use App\Models\SmartModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class BrowserVersion extends MicroModel
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

    public function browser()
    {
        return $this->belongsTo(Browser::class);
    }
}
