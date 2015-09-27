<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProfilController extends Controller {
	public function index(){
		$nama = "oos";
		$umur = 38;
		return view('profil', compact('nama','umur'));
	}
	public function materi(){
		$datas = ['html','php','javascript','json'];
		return view('materi')->with('datas',$datas);
	}
}