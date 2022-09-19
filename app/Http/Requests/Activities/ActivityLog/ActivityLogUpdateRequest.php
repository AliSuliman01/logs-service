<?php


namespace App\Http\Requests\Activities\ActivityLog;


use App\Http\Requests\ApiFormRequest;

class ActivityLogUpdateRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'id' => 'required|exists:user_activities,id,deleted_at,NULL',
            'user_id' 					=> '' ,
			'activity_type_id' 					=> '' ,
			'target_id' 					=> '' ,
			'target_table_name' 					=> '' ,

        ];
    }
}
