<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('tb_user',function(Blueprint $table){
			$table->increments('id');
			$table->string('code',64);
			$table->string('name',64);
			$table->string('password',64);
			$table->integer("class_id");
			$table->boolean('status');
			$table->string("type",2);//01teacher,02 student,03 other
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
		Schema::drop("tb_user");
	}

}
