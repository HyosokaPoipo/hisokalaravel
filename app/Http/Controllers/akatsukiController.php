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


    public function create()
    {
    	return view('akatsukiView.create');
    }

    public function store(Request $req)
    {
    	//dd($req);
    	
    	$data = new akatsuki_tables;

    	$data->Name = $req->Name;
    	$data->Position = $req->Position;
    	$data->Secret_Jutsu = $req->Secret_Jutsu;
    	$data->Parner = $req->Parner;

    	$data->save();
    	

    	
		//	cara lain :
		//	$Input = $req->all();
		//	$data = akatsuki_tables::Create($Input);
    	

    	//return redirect()->route('akatsukiView.index');
		//	return "something";
		return redirect()->action('akatsukiController@index');
    }









    public function show($id)
    {
    	//return $id;
    	$datas = akatsuki_tables::find($id);
    	//return $data;

    	return view('akatsukiView.show')->with('showdata',$datas);
    }


    public function edit($id)
    {

    }

public function delete($id)
{

}

    public function destroy($id)
    {
    	akatsuki_tables::destroy($id);
    	return redirect()->action('akatsukiController@index');
    }
}
