<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use JPTest\User;
use JPTest\UserEmailMessage;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		for ($i = 0; $i < 20; $i++) {
			$user = User::create([
			    'name' => "Jacob{$i} Wolowitz",
			    'email' => "me{$i}@jacob-w.com",
			]);
			$email_num = round(mt_rand(5, 10));
			for ($b = 0; $b < $email_num; $b++) {
				UserEmailMessage::create([
				    'user_id' => $user->id,
				    'message' => "This is user {$user->id} with message {$b}. How are you doing? How's the kids?"
				]);
			}
		}
	}

}
