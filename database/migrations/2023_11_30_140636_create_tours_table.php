<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('describe', 255);
            $table->string('address', 255);
            $table->integer('large_area');
            $table->string('photo', 150);
            $table->double('longitude');
            $table->double('latitude');
            $table->decimal('price_ticket_on_weekday');
            $table->decimal('price_ticket_on_weekend');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours_table');
    }
};
