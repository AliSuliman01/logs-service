<?php


namespace App\Http\Requests\Activities\ActivityTypes\ActivityTypes;


use AliSuliman\MicroFeatures\Http\Requests\ApiFormRequest;

class ActivityTypeStoreRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'uri' 					=> 'required|string' ,
            'name' 					=> 'required|string' ,
        ];
    }
}
