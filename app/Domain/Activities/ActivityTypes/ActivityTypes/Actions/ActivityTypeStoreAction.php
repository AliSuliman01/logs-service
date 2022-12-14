<?php


namespace App\Domain\Activities\ActivityTypes\ActivityTypes\Actions;


use App\Domain\Activities\ActivityTypes\ActivityTypes\DTO\ActivityTypeDTO;
use App\Domain\Activities\ActivityTypes\ActivityTypes\Model\ActivityType;

class ActivityTypeStoreAction
{
    public static function execute(
        ActivityTypeDTO $activityTypeDTO
    ){

        $activityType = new ActivityType($activityTypeDTO->toArray());
        $activityType->save();
        return $activityType;
    }
}
