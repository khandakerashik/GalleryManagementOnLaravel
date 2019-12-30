<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\imageCrud;
use Illuminate\Support\Facades\DB;
use App\layoutModel;

class homeController extends Controller
{
    public function index(){
		return view('home.homeIndex');
	}
	
	public function gallary(Request $req, $id){
		//return view('home.gallary_view');
		$images = imageCrud::where('username', $req->session()->get('name'))
					->where('image_type', $id)
					->get();
		//return $images;
		if($images != null){
			
			$lay = layoutModel::where('username', $req->session()->get('name'))
					->get();
					//return $lay;
			if($lay != null){
				if($lay[0]->layout == 'mosaic'){
					return view('home.mosaic_view')->with('images', $images);
				}
				else if($lay[0]->layout == 'standard'){
					return view('home.gallary_view')->with('images', $images);
				}
			}
		}
		else {
			return view('home.emptyGallary');
		}
	}
	public function vehicle(){
		//return view('home.gallary_view');
		return view('landing_page.index');
		//return view('home.pictureUpload');
	}
	public function allImg(Request $req){
		//return view('home.gallary_view');
		$images = imageCrud::all();
		//return $images;
		if($images != null){
			
			$lay = layoutModel::where('username', $req->session()->get('name'))
					->get();
					//return $lay;
			if($lay != null){
				if($lay[0]->layout == 'mosaic'){
					return view('home.mosaic_view')->with('images', $images);
				}
				else if($lay[0]->layout == 'standard'){
					return view('home.gallary_view')->with('images', $images);
				}
			}
		}
		else {
			return view('home.emptyGallary');
		}
	}
	
}
