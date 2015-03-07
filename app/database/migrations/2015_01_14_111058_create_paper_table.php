<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaperTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create("tb_paper_store",function($table){
			$table->increments("id");
			$table->string("name",120);
			$table->string("description",3000);
			$table->integer("course_id");			
			$table->integer("year");
			$table->dateTime('created_at');
			$table->integer('created_by');
			$table->dateTime('updated_at');
			$table->integer('updated_by');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop("tb_paper_store");
	}

}
