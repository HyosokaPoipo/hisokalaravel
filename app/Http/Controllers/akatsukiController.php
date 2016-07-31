<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\akatsuki_tables;

class akatsukiController extends Controller
{
    public function index()
    {
    	$isiTable = akatsuki_tables::all();
    	//return $isiTable;

    	return view('akatsukiView.index')->with('alldata',$isiTable);
    }
}
