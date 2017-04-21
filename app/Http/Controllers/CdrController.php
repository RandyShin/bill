<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cdr;

class CdrController extends Controller
{
    public  function  index()
    {
        // Test database connection
        //try {
        //    var_dump(DB::connection()->getDatabaseName());
        //} catch (\Exception $e) {
        //    die("Could not connect to the database.  Please check your configuration.");
        //}

        //$cdrs = Cdr::first();
        $cdrs = Cdr::selectRaw('calldate, src, dst, duration, billsec, disposition')->take(50)->get();

//        return $cdrs;

        return view('welcome', compact('cdrs'));
    }
}
