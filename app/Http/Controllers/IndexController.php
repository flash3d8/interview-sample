<?php namespace JPTest\Http\Controllers;

use JPTest\Http\Requests;
use JPTest\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}

}
