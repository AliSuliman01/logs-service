<?php


namespace App\Http\Requests\Activities\ActivityLog;


use App\Http\Requests\ApiFormRequest;

class ActivityLogDestroyRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'id' => 'required|exists:user_activities,id,deleted_at,NULL',
        ];
    }
}
