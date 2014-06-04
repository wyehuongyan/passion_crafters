<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// populate with 12 dummy beer products
		$product = new Product;
		$product->name = "Evil Twin Hipster Ale";
		$product->price = 8.50;
		$product->description = "American Pale Ale – 5.5%abv – Denmark";
		$product->image_url = "images/1ffb1cccffc211e28d6322000ae811f0_7.jpg";
		$product->save();

		$product = new Product;
		$product->name = "Dogfish Head 90 Minute Imperial IPA";
		$product->price = 12.00;
		$product->description = "9%abv – USA";
		$product->image_url = "images/3d3835aa0dd111e3877122000a1fbc4f_7.jpg";
		$product->save();

		$product = new Product;
		$product->name = "Deus Brut des Flandres";
		$product->price = 17.50;
		$product->description = "Belgian Strong Ale – 11.5%abv – Belgium";
		$product->image_url = "images/0584b360aa4111e3a90412310a334dbf_8.jpg";
		$product->save();

		$product = new Product;
		$product->name = "De Dochter van de Korenaar Noblesse";
		$product->price = 15.00;
		$product->description = "Belgian Ale – 5.5%abv – Belgium";
		$product->image_url = "images/914335_1531228003771509_1603580022_n.jpg";
		$product->save();

		$product = new Product;
		$product->name = "Septem Thursday’s Premium Red Ale";
		$product->price = 11.00;
		$product->description = "4.5%abv – Greece";
		$product->image_url = "images/916319_478258618957321_1363342529_n.jpg";
		$product->save();

		$product = new Product;
		$product->name = "Goose Island 25th Anniversary ESB";
		$product->price = 16.00;
		$product->description = "6.4%abv – Chicago, USA";
		$product->image_url = "images/925439_231712243619070_1669463985_n.jpg";
		$product->save();

		$product = new Product;
		$product->name = "Bodebrown Tripel Montfort II";
		$product->price = 17.50;
		$product->description = "Belgian Tripel – 10%abv – Brazil";
		$product->image_url = "images/926652_404860546324674_1785023469_n.jpg";
		$product->save();

		$product = new Product;
		$product->name = "Jupiter";
		$product->price = 10.50;
		$product->description = "American Pale Ale – 5.4%abv";
		$product->image_url = "images/926995_1477681052448043_468220516_n.jpg";
		$product->save();

		$product = new Product;
		$product->name = "Deschutes Chasin’ Freshies 2013 (Amarillo)";
		$product->price = 13.00;
		$product->description = "IPA – 7.4%abv – USA";
		$product->image_url = "images/1515355_254712158021348_1189144790_n.jpg";
		$product->save();

		$product = new Product;
		$product->name = "Arcadia Bourbon Barrel Shipwreck Porter (2011)";
		$product->price = 19.00;
		$product->description = "Imperial Porter – 12%abv – 50 IBY – USA";
		$product->image_url = "images/1516276_1458764227693115_1387776249_n.jpg";
		$product->save();

		$product = new Product;
		$product->name = "Prairie Artisan Ales Merica";
		$product->price = 11.00;
		$product->description = "Saison – 7.5%abv – USA";
		$product->image_url = "images/1724657_661888777207188_1094820650_n.jpg";
		$product->save();

		$product = new Product;
		$product->name = "Epic Spiral Jetty IPA";
		$product->price = 12.50;
		$product->description = "American IPA – 6.6%abv – 65 IBU – USA";
		$product->image_url = "images/1941008_639329246138560_1637305029_n.jpg";
		$product->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop all products
		Product::truncate();
	}

}
