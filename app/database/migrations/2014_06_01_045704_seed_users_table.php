<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$user = new User;
		$user->name = "John Doe";
		$user->email = "johndoe@example.com";
		$user->password = "password";
		$user->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// remove all users
		User::truncate();
	}

}
