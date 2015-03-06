<?php namespace JPTest\Http\Controllers;

use JPTest\Http\Requests;
use JPTest\Http\Controllers\Controller;
use JPTest\User;
use JPTest\UserEmailMessage;

use Illuminate\Http\Request;

class JsonController extends Controller {
	
	public function users() {
		return response()->json(User::all());
	}
	
	public function emails($id) {
		return response()->json(User::find($id)->emails);
	}

}
