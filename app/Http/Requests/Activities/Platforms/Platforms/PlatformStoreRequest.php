<?php


namespace App\Http\Requests\Activities\Platforms\Platforms;


use App\Http\Requests\ApiFormRequest;

class PlatformStoreRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'name' 					=> '' ,

        ];
    }
}
