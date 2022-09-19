<?php


namespace App\Http\Procedures;


use AliSuliman\MicroFeatures\Http\Procedures\Procedure;
use App\Domain\Activities\ActivityLog\Model\ActivityLog;
use App\Domain\Activities\ActivityTypes\ActivityTypes\Model\ActivityType;
use App\Domain\Activities\Browsers\Browsers\Model\Browser;
use App\Domain\Activities\Browsers\BrowserVersions\Model\BrowserVersion;
use App\Domain\Activities\Devices\Model\Device;
use App\Domain\Activities\DeviceType\Model\DeviceType;
use App\Domain\Activities\Platforms\Platforms\Model\Platform;
use App\Domain\Activities\Platforms\PlatformVersions\Model\PlatformVersion;
use Illuminate\Http\Request;

class ActivityLogProcedure extends Procedure
{
    public function store(Request $request)
    {
        $activityType = ActivityType::query()
                        ->where('uri','=', $request->uri)
                        ->first();
        if (!$activityType)
            ActivityType::query()->create([
                'uri' => $request->uri,
                'name' => $request->uri
            ]);

        $platformVersion = PlatformVersion::query()
                        ->where('version','=',$request->platform_version)
                        ->whereRelation('platform','name','=',$request->platform)
                        ->first();

        if (!$platformVersion){
            $platform = Platform::query()->updateOrCreate(['name' => $request->platform])->first();
            $platformVersion = $platform->versions()->create(['version' => $request->platform_version]);
        }

        $browserVersion = BrowserVersion::query()
                        ->where('version','=',$request->browser_version)
                        ->whereRelation('browser','name','=',$request->browser)
                        ->first();

        if (!$browserVersion){
            $browser = Browser::query()->updateOrCreate(['name' => $request->browser])->first();
            $browserVersion = $browser->versions()->create(['version' => $request->browser_version]);
        }

        $device = Device::query()
                        ->where('name','=',$request->device)
                        ->whereRelation('device_type','name','=',$request->device_type)
                        ->first();

        if (!$device){
            $deviceType = DeviceType::query()->updateOrCreate(['name' => $request->device_type])->first();
            $device = $deviceType->devices()->create(['name' => $request->device]);
        }

        ActivityLog::query()->create([
            'device_id' => $device->id,
            'browser_version_id' => $browserVersion->id,
            'platform_version_id' => $platformVersion->id,
            'user_id' => $request->user_id,
            'uri' => $request->uri,
            'ip' => $request->ip,
            'created_at' => $request->created_at,
            'json_request' => $request->jsonRequest,
            'json_response' => $request->jsonResponse,
        ]);
    }
}
