<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MicmacController extends Controller
{


	public function index( ){
			 return view('micmac.index');

	}

	public function create( ){

    	 return view('micmac.create');
	}

	public function store( ){

    	
	}


}
