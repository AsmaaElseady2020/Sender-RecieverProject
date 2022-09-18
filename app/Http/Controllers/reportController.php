<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\report;
use App\Models\client;


class reportController extends Controller
{
    public function store(Request $request ,report $report){



        $request_data = $request->all();

        report::create($request_data);

        $clientReports=report::where('user_id',$request->user_id)->get();
        
         
        return view('clientReports',compact('clientReports'));
       
    }

public function show(){
$reports=report::all();
return view('reports',compact('reports'));


}






}
