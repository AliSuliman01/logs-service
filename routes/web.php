<?php

use App\Domain\Activities\ActivityLog\Model\ActivityLog;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'activityLogs' => ActivityLog::with(['activity_type','platform_version.platform','browser_version.browser', 'device.device_type'])->get()
    ]);
});
