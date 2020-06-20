<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reservations', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->unsignedBigInteger('user_id')->index('reservations_user_id_foreign');
			$table->unsignedBigInteger('room_id')->index('reservations_room_id_foreign');
			$table->timestamps();
			$table->integer('num_of_guests');
			$table->date('arrival');
			$table->date('departure');
			$table->text('price');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reservations');
	}
}
