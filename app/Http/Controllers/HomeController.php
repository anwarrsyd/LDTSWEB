<?php

namespace App\Http\Controllers;

//use Request;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Peserta;
use Auth;
use Input;
use Session;
use DB;
use Response;
use App\Layanan;


class HomeController extends controller{

	public function login(){
		return view('index');
	}

	public function daftar(){
		$data=array();
		$data['daftar']=Layanan::get();
		return view('table',$data);
	}

	public function input(){
		return view('dashboard');
	}

	public function insert(){
		 $data=Input::all();
		  layanan::insertGetId(array(
            'kategori'=> $data['kategori'],
            'namalayanan'=>$data['layanan'],
            'alamat'=>$data['alamat'],
            'notelpon'=>$data['telpon'],
            'lat'=>$data['latitude'],
            'longitude'=>$data['longitude']

            
		));

		  return redirect('input');
	}


	public function passdata(){

		return  json_encode(DB::table('layanan')->get());
	}


	public function getdata(){
	$url = urlencode ("https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=-7.2799089%2C112.7972183&radius=5000&type=police&rankBy=distance&key=AIzaSyBVuRYeAWRZhzeF9c51pOUfAC93iP7FgBE");

    $json = json_decode(file_get_contents($url), true);
    return $json;
    
	}
}