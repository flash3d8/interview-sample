<?php namespace JPTest;

use Illuminate\Database\Eloquent\Model;

class UserEmailMessage extends Model {

	public function user() {
		return $this->belongsTo('JPTest\User');
	}

}
