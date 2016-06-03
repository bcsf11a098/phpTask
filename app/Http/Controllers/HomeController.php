<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Validator;
use App\Http\Requests;
use App\album;
class HomeController extends Controller
{
	public function index()
	{
		$albums = album::all();
		return view('home.index', compact('albums'));
	}
	
	public function delete(Request $req, album $album)
	{
		if($req->ajax())
		{
			$album->delete();
		}
		return "true" ;
	}
	
	public function create(Request $req)
	{
		$validator=Validator::make($req->all(),[
			'songName'=>'required',
			'artistName'=>'required',
			'rating'=>'required',
			'file'=>'image'
		]);

		if($validator->fails())
		{
		   return Response::json(array(
           'success' => false,
           'errors' => $validator->getMessageBag()->toArray()),400);
        }
        $album = new album;
		if($req->ajax())
		{
		 	$image= $req->file("file");
		 	if(!is_null($image))
		 	{
		 		$destinationPath="uploadedPics";        
          	 	$ext=$image->getClientOriginalExtension();
           		$filename=time().'.'.$ext;
          		$upload_success = $image->move($destinationPath, $filename);
          	}
		 	else
		 	{
		 		$filename="2.png";
		 	}
			$album->songName = $req->songName;
			$album->artistName = $req->artistName;
			$album->rating = $req->rating;
			$album->picName = $filename;
			$album->save();
			$album->orderBy('id','desc')->first();
			return Response:: view("partialView.partialIndex",compact('album'));
		}
	}

	public function update(Request $req, album $album)
	{
		if($req->ajax())
		{
			$image= $req->file("file");
		 	if(!is_null($image))
		 	{
		 		$destinationPath="uploadedPics";        
          	 	$ext=$image->getClientOriginalExtension();
           		$filename=time().'.'.$ext;
          		$upload_success = $image->move($destinationPath, $filename);
          		$album->picName=$filename; 
          	}
			$album->songName = $req->songName;
			$album->artistName = $req->artistName;
			$album->rating = $req->rating;
			$album->save();
			$albums=album::all();
			return Response:: view("partialView.partialUpdatedView",compact('albums'));
		}
		
	}

	public function Search(Request $req)
	{
		if($req->ajax())
		{
			$albums=album::where('songName', 'like',"%".$req->search."%")
			->orWhere('artistName', 'like',"%".$req->search."%")->get();
			return Response:: view("partialView.partialUpdatedView",compact('albums'));
		}
		
	}

	public function Search_sort(Request $req)
	{
		if($req->ajax())
		{
			$albums=album::where('songName', 'like',"%".$req->search."%")
			->orWhere('artistName', 'like',"%".$req->search."%")
			->orderBy($req->sort,$req->order)
			->get();
			return Response:: view("partialView.partialUpdatedView",compact('albums'));
		}
	}
}
