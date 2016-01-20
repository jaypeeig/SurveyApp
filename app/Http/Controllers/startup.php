<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class startup extends Controller
{
    
	public function index(){

		return view('survey.main');

	}

	public function save(){
		
	}


}
