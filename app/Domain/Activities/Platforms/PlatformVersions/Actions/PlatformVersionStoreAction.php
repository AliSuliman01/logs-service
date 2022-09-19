<?php


namespace App\Domain\Activities\Platforms\PlatformVersions\Actions;


use App\Domain\Activities\Platforms\PlatformVersions\DTO\PlatformVersionDTO;
use App\Domain\Activities\Platforms\PlatformVersions\Model\PlatformVersion;
use Illuminate\Support\Facades\Auth;

class PlatformVersionStoreAction
{
    public static function execute(
        PlatformVersionDTO $platformVersionDTO
    ){

        $platformVersion = new PlatformVersion($platformVersionDTO->toArray());
        $platformVersion->save();
        return $platformVersion;
    }
}
