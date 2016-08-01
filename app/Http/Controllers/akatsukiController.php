<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Http\Requests;
use App\akatsuki_tables;

class akatsukiController extends Controller
{
    public function index()
    {
    	$isiTable = akatsuki_tables::get();
    	//return $isiTable;
        log::info("hellow");
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

    $datas = akatsuki_tables::find($id);
    //$test = akatsuki_tables::where("id",id)->first();
    //return $datas;
    return view('akatsukiView.edit')->with('input',$datas);;//,compact('input',$datas));//compact for single variable only

}


public function update(Request $req, $id)
{
    //dd($req);
    $data = akatsuki_tables::find($id);
    $data->name = $req->name;
    $data->position = $req->position;
    $data->secret_jutsu = $req->secret_jutsu;
    $data->parner = $req->parner;

    $data->save();
    return redirect()->action('akatsukiController@index');
}

public function delete($id)
{

}

public function destroy($id)
{
    	//akatsuki_tables::destroy($id);
    //dd($id);
    $pro=akatsuki_tables::where("id", $id)->first()->delete();
    //dd($pro);
    return redirect()->action('akatsukiController@index');
}


}
