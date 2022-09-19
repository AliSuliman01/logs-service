<?php


namespace App\Http\Requests\Activities\Platforms\PlatformVersions;


use App\Http\Requests\ApiFormRequest;

class PlatformVersionDestroyRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'id' => 'required|exists:platform_versions,id,deleted_at,NULL',
        ];
    }
}
