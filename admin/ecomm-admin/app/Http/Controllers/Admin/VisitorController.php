<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
    
    public function GetVisitorDetails()
    {
        date_default_timezone_set("America/New_York");

        $now        = Carbon::now();
        $ip_address = $_SERVER['REMOTE_ADDR'];
        $visit_time = $now->format( 'h:i:sa');
        $visit_date = $now->format('d-m-Y');

        $result = Visitor::insert([
            'ip_address' => $ip_address,
            'visit_time' => $visit_time,
            'visit_date' => $visit_date
        ]);

        return $result;
    }



}
