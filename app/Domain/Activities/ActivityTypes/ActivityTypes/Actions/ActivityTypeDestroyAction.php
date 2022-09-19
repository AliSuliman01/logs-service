<?php


namespace App\Domain\Activities\ActivityTypes\ActivityTypes\Actions;


use App\Domain\Activities\ActivityTypes\ActivityTypes\DTO\ActivityTypeDTO;
use App\Domain\Activities\ActivityTypes\ActivityTypes\Model\ActivityType;

class ActivityTypeDestroyAction
{
    public static function execute(
        ActivityTypeDTO   $activityTypeDTO
    ){

        $activityType = ActivityType::find($activityTypeDTO->id);
        $activityType->translations()->delete();
        $activityType->delete();
        return $activityType;
    }
}
