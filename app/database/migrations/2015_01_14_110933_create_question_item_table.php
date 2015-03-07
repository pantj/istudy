<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create("tb_question_item",function($table){
			$table->increments("id");
			$table->integer("question_store_id");
			$table->string("type",2);//01单选，02多选，03判断，04填空，05问答，06综合
			$table->mediumText("content");
			$table->mediumText("answer");
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
		Schema::drop("tb_question_item");
	}

}
