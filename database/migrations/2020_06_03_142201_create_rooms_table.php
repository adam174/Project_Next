<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('hotel_id')->index('rooms_hotel_id_foreign');
			$table->string('type');
			$table->text('description');
			$table->decimal('price', 10);
			$table->string('image');
			$table->integer('n_rooms');
			$table->string('superficie', 10);
			$table->string('couchage', 50);
			$table->integer('occupants');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
