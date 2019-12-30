<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class imgManupulationController extends Controller
{
    public function index($img){
		return view('image.imgManupulation')->with('img', $img);
	}
	
	public function editImg(Request $req, $img){
		
			//{{asset('upload/' . $img->image)}}
			//return $img;
            $file = Image::make('storage/'.$img);
			//$filename= $file->getClientOriginalName();
			if($req->button == 'rotate Right')$file->rotate(-90);
			else if($req->button == 'rotate Left')$file->rotate(90);
			
			$file->save('storage/'. $img);
			
			return redirect()->route('imgMan.index', $img);
	}
	public function crop($img){
		return view('image.cropIndex')->with('img', $img);
	}
	
	public function cropImage(Request $req, $img){
		$width = (int)$req->width;
		$height = (int)$req->height;
		$file = Image::make('storage/'.$img);
		$file->crop($width, $height);
		$file->save('storage/'. $img);
		return back();
	}


	
}
