<?php


namespace App\Domain\Activities\Devices\Actions;


use App\Domain\Activities\Devices\DTO\DeviceDTO;
use App\Domain\Activities\Devices\Model\Device;

class DeviceStoreAction
{
    public static function execute(
        DeviceDTO $deviceDTO
    ){
        $new_device = new Device($deviceDTO->toArray());

        $new_device->save();

        return $new_device ;
    }
}
