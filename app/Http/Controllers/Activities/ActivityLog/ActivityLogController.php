<?php


namespace App\Http\Controllers\Users\Activities\ActivityLog;


use App\Domain\Activities\ActivityLogTables\Model\ActivityLogTable;
use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Activities\ActivityLog\Actions\ActivityLogDestroyAction;
use App\Domain\Activities\ActivityLog\Actions\ActivityLogUpdateAction;
use App\Http\ViewModels\Users\Activities\ActivityLog\MyActivityLogVM;
use App\Http\ViewModels\Users\Activities\ActivityLog\ActivityLogShowVM;
use App\Http\ViewModels\Users\Activities\ActivityLog\ActivityLogIndexVM;

class ActivityLogController extends Controller
{
    private $builder ;

    public function __construct()
    {
        $activity_log_tables = ActivityLogTable::select('table_name')->pluck('table_name');
        $this->builder = new OurBuilder($activity_log_tables);
    }

    public function index(){

        return response()->json(Response::success((new ActivityLogIndexVM())->toArray()));
    }

    public function my_activities(){

        return response()->json(Response::success((new MyActivityLogVM())->toArray()));
    }

}
