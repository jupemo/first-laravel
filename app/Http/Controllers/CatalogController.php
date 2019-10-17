<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller
{
    
    function getIndex(){
		$peliculas = Movie::all();
        return view('catalog.index', ['peliculas' => $peliculas]);
    }

    function getShow($id){
		$pelicula = Movie::find($id);
        return view('catalog.show', array('pelicula' => $pelicula));
    }

    function getCreate(){
        return view('catalog.pelicula');
    }

    function getEdit($id){
		$pelicula = Movie::find($id);
        return view('catalog.pelicula', array('pelicula' => $pelicula));
	}
	
	function store(Request $request){
		$p = new Movie;
		$p->title = $request->input('title');
		$p->poster = $request->poster;
		$p->director = $request->director;
		$p->year = $request->year;
		$p->rented = $request->rented;
		$p->synopsis = $request->synopsis;
		$p->save();

		return redirect('catalog/');
	}

	function update(){

	}

}
