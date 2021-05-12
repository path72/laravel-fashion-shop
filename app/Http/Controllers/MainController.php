<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress; // ! richiamo il mio model ! //


// use Illuminate\Support\Facades\DB; // ! mi serve questo? ! //


class MainController extends Controller
{
    public function index() {
		return view('home');
	}

	public function products() {

		/**
		 * SELECT * 
		 * FROM dresses
		 */ 
		$dresses = Dress::all();
		
		/**
		 * SELECT * 
		 * FROM dresses 
		 * WHERE availability != 0 
		 * ORDER BY `size` DESC
		 */ 
		// $dresses = Dress::where('availability','!=',0)->orderBy('size','desc')->get();
		
		/**
		 * SELECT size, model, SUM(stock) as total_stock
		 * FROM `dresses`
		 * GROUP BY size, model
		 * ORDER BY `size`
		 */
		$aggregation1 = Dress::selectRaw('size, model, sum(stock) as total_stock')
			// ->where('availability','!=',0)
			->groupBy('size','model')
			->orderBy('size')
			->get();
	
		// check
		// @dump($aggregation);

		$data = [
			'dresses' => $dresses,
			'aggregation1' => $aggregation1
		];

		return view('products',$data);

	}

	public function contacts() {
		return view('contacts');
	}
}
