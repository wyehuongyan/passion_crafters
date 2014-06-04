<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviews extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("reviews", function($table){
			$table->increments("id");
			$table->integer("rating");
			$table->text("comment");
			$table->integer("product_id")->unsigned();
			$table->foreign("product_id")->references("id")->on("products");
			$table->integer("user_id")->unsigned();
			$table->foreign("user_id")->references("id")->on("users");
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("reviews");
	}

}
