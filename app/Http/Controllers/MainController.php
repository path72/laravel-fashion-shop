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

		/*
			db: shop, table: dresses
			--------------------------------------------
			id 				NUMBER	INT			PK
			model			STRING	VARCHAR(20)	NOT NULL
			size			NUMBER	TINYINT 	NOT NULL
			color			STRING	VARCHAR(20)	NOT NULL
			fabric			STRING	VARCHAR(50)	NOT NULL
			availability	BOOLEAN	TINYINT 	NOT NULL
			stock			NUMBER	SMALLINT 	NOT NULL
			--------------------------------------------
		*/

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
		$dresses_by_size_model = Dress::selectRaw('size, model, sum(stock) as total_stock')
			// ->where('availability','!=',0)
			->groupBy('size','model')
			->orderBy('size')
			->get();
	
		// check
		// @dump($dresses_by_size_model);

		$data = [
			'dresses' => $dresses,
			'dresses_by_size_model' => $dresses_by_size_model
		];

		return view('products',$data);

	}

	public function contacts() {
		return view('contacts');
	}
}
