<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaperItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create("tb_paper_item",function($table){
			$table->increments("id");
			$table->integer("paper_id");
			$table->integer("question_item_id");
			$table->float("score");
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
		Schema::drop("tb_paper_item");
	}

}
