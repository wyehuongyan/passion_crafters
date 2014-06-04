<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItems extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("order_items", function($table) {
			$table->increments("id");
			$table->integer("quantity")->default("0");
			$table->integer("order_id")->unsigned();
			$table->foreign("order_id")->references("id")->on("orders");
			$table->integer("product_id")->unsigned();
			$table->foreign("product_id")->references("id")->on("products");
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
		Schema::drop("order_items");
	}

}
