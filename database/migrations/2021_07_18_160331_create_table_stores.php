<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('photo')->nullable();
            $table->text('address')->nullable();
            $table->string('phone', 20)->nullable();
            $table->text('description')->nullable();
            $table->text('langitude')->nullable();
            $table->text('longitude')->nullable();
            $table->BigInteger('category_store_id')->unsigned();
            $table->timestamps();
            // $table->foreign('category_store_id')->reference('id')->on('stores')->onUpdate('cascade')->delete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
