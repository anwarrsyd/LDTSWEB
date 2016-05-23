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
		  Session::flash('messagesuksesdelete','iyes');
		  return redirect('input');
	}
	public function insertandroid(){
		  $data=Input::all();
          layanan::insertGetId(array(
            'kategori'=> $data['kategori'],
            'namalayanan'=>$data['namalayanan'],
            'alamat'=>$data['alamat'],
            'notelpon'=>$data['notelpon'],
            'lat'=>$data['lat'],
            'longitude'=>$data['longitude']

            
		));
		return "upload sukses";
		}

    public function insertandroidjson($kategori,$namalayanan,$alamat,$notelpon,$lat,$longitude){
         $data=Input::all();
          layanan::insertGetId(array(
            'kategori'=> $kategori,
            'namalayanan'=>$namalayanan,
            'alamat'=>$alamat,
            'notelpon'=>$notelpon,
            'lat'=>$lat,
            'longitude'=>$longitude

            
        ));
          $value=array();
            $value[0]=["status"=>"ok"];
            return json_encode($value);
        }




	public function passdata(){

		return  json_encode(DB::table('layanan')->get());
	}


	public function getdata(){
	$url = urlencode ("https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=-7.2799089%2C112.7972183&radius=5000&type=police&rankBy=distance&key=AIzaSyBVuRYeAWRZhzeF9c51pOUfAC93iP7FgBE");

    $json = json_decode(file_get_contents($url), true);
    return $json;

	}

	 public function delete()
    {
        $data=Input::all();
        $id=$data['id'];
        Layanan::where('id', $id)->delete();
         Session::flash('messagesuksesdelete','iyes');
        return redirect('list');
        

    }

    public function distance($kategori,$lat,$long){
    	$results=array();
    	$results = DB::select( DB::raw("SELECT *, ( 3959 * acos( cos( radians(".$lat.") ) 
    		* cos( radians( lat ) ) * cos( radians( longitude) - radians(".$long.") ) 
    		+ sin( radians(".$lat.") ) * sin( radians( lat ) ) ) ) AS distance FROM layanan  where kategori ='$kategori' HAVING distance < 3 ORDER BY distance LIMIT 0 , 20 ") );
    	return json_encode($results);
    }

    public function notelpon($namalayanan){
    	$results=array();
    	$results=Layanan::select('notelpon')->where('namalayanan','=',$namalayanan)->get();
    	return json_encode($results);

    }
    public function notelpondedek($lat,$lng){
    	$results=array();
    	$results=Layanan::select('notelpon')->where('lat','=',$lat)->where('longitude','=',$lng)->get();
    	return json_encode($results);

    }
}