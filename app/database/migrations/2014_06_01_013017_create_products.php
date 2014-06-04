<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("products", function($table){
			$table->increments("id");
			$table->string("name", 64);
			$table->float("price")->default("0.00");
			$table->string("description");
			$table->float("rating_cache", 2, 1)->default("3.0");
			$table->integer("rating_count")->default("0");
			$table->string("image_url");
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
		Schema::drop("products");
	}

}
