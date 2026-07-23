<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UtilController extends Controller
{
    public function product($param1, $param2)
    {
        Log::info('==================== UTILCONTROLLER PRODUCT START====================');
        Log::info($param1 . '*' . $param2);
        Log::info('==================== UTILCONTROLLER PRODUCT END====================');
        return $param1 * $param2;
    }

    public function quotient($param1, $param2)
    {
        Log::info('==================== UTILCONTROLLER QUOTIENT START====================');
        Log::info($param1 . '/' . $param2);
        Log::info('==================== UTILCONTROLLER QUOTIENT END====================');
        return $param1 / $param2;
    }
}
