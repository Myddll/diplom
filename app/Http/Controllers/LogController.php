<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Spatie\Activitylog\Models\Activity;

class LogController extends Controller
{
    public function getLogs(): JsonResponse
    {
        return response()->json(Activity::all());
    }
}
