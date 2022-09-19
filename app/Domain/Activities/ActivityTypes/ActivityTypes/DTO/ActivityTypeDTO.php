<?php


namespace App\Domain\Activities\ActivityTypes\ActivityTypes\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class ActivityTypeDTO extends DataTransferObject
{
    /* @var integer|null */
    public $uri;
    /* @var string|null */
    public $name;


    public static function fromRequest($request)
    {
        return new self([
            'uri' => $request['uri'] ?? null,
            'name' => $request['name'] ?? null,
        ]);
    }
}
