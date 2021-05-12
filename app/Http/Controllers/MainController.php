<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress; // ! richiamo il mio model ! //

class MainController extends Controller
{
    public function index() {
		return view('home');
	}

	public function products() {

		// SELECT * FROM dresses
		$dresses = Dress::all();

		// SELECT * FROM dresses WHERE condition({col},{value})
		// $dresses = Dress::where('fabric','!=','linen')->get();
		// $dresses = Dress::where('size',10)->get();

		// check
		@dump($dresses);

		$data = [
			'dresses' => $dresses
		];

		return view('products',$data);
	}

	public function contacts() {
		return view('contacts');
	}
}
