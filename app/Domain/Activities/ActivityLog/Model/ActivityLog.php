<?php

namespace App\Domain\Activities\ActivityLog\Model;

use AliSuliman\MicroFeatures\Models\MicroModel;
use App\Domain\Activities\ActivityTypes\ActivityTypes\Model\ActivityType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityLog extends MicroModel
{
    use HasFactory,SoftDeletes;

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
}
