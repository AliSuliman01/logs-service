<?php

namespace App\Http\Requests\Activities\ActivityLog;

use App\Http\Requests\ApiFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class GetMostUsersInteractRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'limit'=>'integer|min:1',

        ];
    }
}
