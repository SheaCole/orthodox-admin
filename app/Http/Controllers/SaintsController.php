<?php

namespace App\Http\Controllers;

use App\Saints;
use Illuminate\Http\Request;

use App\Http\Requests;

class SaintsController extends Controller {

	//Saints pages


	public function saints() {
		$saints = Saints::all();
		return view('home.saints',compact('saints'));
	}


	public function add_a_saint() {
		return view('home.add-saints');
	}


	public function add_saints(Request $request) {

		$saint = new Saints;

		$saint->saint_name = $request->get('data')['saint_name'];

		$saint->saint_feast_day = $request->get('data')['saint_feast_day'];

		$saint->saint_description = $request->get('data')['saint_description'];

//		$saint->saint_img = $request->get('data')['saint_img'];

		$saint->save();

	}

	public function saintsJson () {
		$saints = Saints::all();
		return $saints;
	}





}
