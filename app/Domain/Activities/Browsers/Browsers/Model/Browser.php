<?php

namespace App\Domain\Activities\Browsers\Browsers\Model;

use AliSuliman\MicroFeatures\Models\MicroModel;
use App\Domain\Activities\Browsers\BrowserVersions\Model\BrowserVersion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Browser extends MicroModel
{
    use HasFactory,SoftDeletes;

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
        return $this->hasMany(BrowserVersion::class, 'browser_id');
        }
}
