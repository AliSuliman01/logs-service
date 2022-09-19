<?php


namespace App\Domain\Activities\Platforms\Platforms\Actions;


use App\Domain\Activities\Platforms\Platforms\DTO\PlatformDTO;
use App\Domain\Activities\Platforms\Platforms\Model\Platform;
use Illuminate\Support\Facades\Auth;

class PlatformDestroyAction
{
    public static function execute(
        PlatformDTO   $platformDTO
    ){

        $platform = Platform::find($platformDTO->id);
        $platform->delete();
        return $platform;
    }
}
