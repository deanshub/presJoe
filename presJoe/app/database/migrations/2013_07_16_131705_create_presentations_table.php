<?php

use Illuminate\Database\Migrations\Migration;

class CreatePresentationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('presentations', function($table) {
			$table->increments('id');
			$table->string('army_user');
			$table->string('title');
			$table->text('contents');
			$table->text('tags');

			$table->timestamps();

			$table->index('army_user');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('presentations');
	}

}