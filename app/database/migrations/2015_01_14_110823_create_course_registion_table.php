<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseRegistionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create("tb_course_registion",function($table){
			$table->increments("id");
			$table->integer("course_id");
			$table->integer("user_id");
			$table->integer("start_year");
			$table->integer("end_year");
			$table->integer("term");//0上学期，1下学期
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
		Schema::drop("tb_course_registion");
	}

}
