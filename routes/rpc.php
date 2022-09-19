<?php


use App\Http\Procedures\ActivityLogProcedure;
use Illuminate\Support\Facades\Route;

Route::rpc('activity_logs',[ActivityLogProcedure::class]);
Route::rpc(\AliSuliman\MicroFeatures\Helpers\Constants::REMOTE_BUILDER_INDEX, [\AliSuliman\MicroFeatures\Http\Procedures\QueryBuilderProcedure::class]);
