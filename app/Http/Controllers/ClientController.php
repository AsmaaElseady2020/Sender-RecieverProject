<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;
use App\Models\report;
use HasFactory;

class ClientController extends Controller
{
    public function createAcount(){


        return view('register');
    }



    public function store(Request $request ){


        $client=client::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'type' => 0,

        ]);

        $client->attachRole('sender');


        return view('login');

/*
        $request_data = $request->all();


        client::create($request_data);

        return view('login');

       if($request->type==1){

        return view('reports');
       }
       else{
        return view('form');
       }

      */ 
    }
public function check(Request $request ){
    
    $reports=report::all();

    $client=client::where('email',$request->email)->first();

    
    
    if($client !=null && $client->hasRole('sender')){

        $id =client::where('email', $request->email)->first()->id;

        return view('form',compact('client','id'));
       

    }

    else{
        return view('reports',compact('reports'));
    }

   
}




}
