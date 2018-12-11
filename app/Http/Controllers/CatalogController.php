<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;
class CatalogController extends Controller
{	
     
	public function getIndex()
	{
		$arrayPeliculas=Movie::all();
		return view('catalog.index',['arrayPeliculas'=>$arrayPeliculas]);
	}

    public function getShow($id)
	{
		$arrayPeliculas=Movie::findOrFail($id);

		return view('catalog.show', ['arrayPeliculas'=>$arrayPeliculas]);
	}

	public function getCreate()
	{
		return view('catalog.create');
	}

	public function getEdit($id)
	{
		$arrayPeliculas=Movie::findOrFail($id);

		return view('catalog.edit', ['pelicula'=>$arrayPeliculas]);
	}

	public function postCreate(Request $request)
	{
		$peli = new Movie;
		$peli->title=$request->input('title');
		$peli->director=$request->input('director');
		$peli->year=$request->input('year');
		$peli->poster=$request->input('poster');
		$peli->synopsis=$request->input('synopsis');
		$peli->save();
		return redirect()->action('CatalogController@getIndex');
	}

	public function putEdit()
	{
		$peli = new Movie;
		$peli->title=$request->input('title');
		$peli->director=$request->input('director');
		$peli->year=$request->input('year');
		$peli->poster=$request->input('poster');
		$peli->synopsis=$request->input('synopsis');
		$peli->save();
		$arrayPeliculas=Movie::findOrFail($request->input('id'));

		return view('catalog.show', ['arrayPeliculas'=>$arrayPeliculas]);
	}
}
