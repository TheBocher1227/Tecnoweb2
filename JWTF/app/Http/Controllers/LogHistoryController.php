<?php

namespace App\Http\Controllers;

use App\Models\LogHistory;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogHistoryController extends Controller
{

 public function index()
{
    $logs = LogHistory::all();
    
    return response()->json($logs, 200);
}


    public static function store(Request $request,$tablas,$data,$id=null){
        try
        {
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }
}
