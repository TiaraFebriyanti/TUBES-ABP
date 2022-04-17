<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home(){
		return view('home');
	}

	public function pariwisata(){
		return view('pariwisata');
	}

	public function kontak(){
		return view('kontak');
	}
}
