<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaperTestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create("tb_paper_test",function($table){
			$table->increments("id");
			$table->integer("course_id");
			$table->integer("user_id");
			$table->string("type",2);//01单选，02多选，03判断，04填空，05问答，06综合
			$table->mediumText("content");
			$table->mediumText("answer");
			$table->float("score");
			$table->mediumText("user_answer");
			$table->float("user_score");
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
		Schema::drop("tb_paper_test");
	}

}
