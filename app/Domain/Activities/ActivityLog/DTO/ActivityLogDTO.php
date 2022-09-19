<?php


namespace App\Domain\Activities\ActivityLog\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class ActivityLogDTO extends DataTransferObject
{
    /* @var integer|null */
    public $id;
    /* @var integer|null */
    public $user_id;
    /* @var integer|null */
    public $json_request;
    /* @var string|null */
    public $json_response;
    /* @var string|null */
    public $ip;
    /* @var integer|null */
    public $device_id;
    /* @var integer|null */
    public $platform_version_id;
    /* @var integer|null */
    public $browser_version_id;
    /* @var string|null */
    public $created_at;


    public static function fromRequest($request)
    {
        return new self([
            'id' => $request['id'] ?? null,
            'user_id' => $request['user_id'] ?? null,
            'uri' => $request['uri'] ?? null,
            'json_request' => $request['json_request'] ?? null,
            'json_response' => $request['json_response'] ?? null,
            'ip' => $request['ip'] ?? null,
            'device_id' => $request['device_id'] ?? null,
            'platform_version_id' => $request['platform_version_id'] ?? null,
            'browser_version_id' => $request['browser_version_id'] ?? null,
            'created_at' => $request['created_at'] ?? null,

        ]);
    }
}
