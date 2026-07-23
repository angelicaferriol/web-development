<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class CalculateController extends Controller{
    public function index($num1, $num2){
        Log::info('==================== CALCULATECONTROLLER START INDEX ====================');
        
        Log::debug('Yah Yah');
        $sum = $this->add($num1, $num2);
        Log::info('SUM = ' . $sum);

        $diff = $this->difference($num1, $num2);
        Log::info('DIFF = ' . $diff);
        $util = new UtilController();
       

        try {
            $product = $util->product($num1, $num2);
            Log::info('PRODUCT = ' . $product);
            
            $quotient = $util->quotient($num1, $num2);
            Log::info('QUOTIENT = ' . $quotient);

        } catch (Throwable $e) {
            Log::error('Exception on Product operation: ' . $e->getMessage());
        } finally {
            Log::info('This will execute no matter what.');
        }

        //$quotient = $util->quotient();
        //return "<h1>You provided: $num1, $num2 ". " <h1>SUM: $sum</h1> " . " <h1> DIFFERENCE: $diff</h1> ". " <h1> PRODUCT: $product <h1/> ";
        //dd('stop');
        Log::info('==================== CALCULATECONTROLLER END INDEX ====================');
        return view('calculate', compact('sum', 'diff', 'product'));
    }

    private function add($param1, $param2){
        Log::info($param1 . '+'. $param2);
        return $param1 + $param2;
    }

    public function difference($param1, $param2){
        //throw new Exception('Something went wrong');
        Log::info($param1 . '-'. $param2);
        return $param1 - $param2;
    }
}