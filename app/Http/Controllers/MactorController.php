<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MactorController extends Controller
{
    public function index( ){
			 return view('mactor.index');

	}

	public function create( ){

    	 return view('mactor.create');
	}

	public function store( ){

    	
	}
}
