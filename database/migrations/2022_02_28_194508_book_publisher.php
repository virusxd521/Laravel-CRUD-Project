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
        //
        Schema::create('book_publisher', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->foreignId('book_id')->nullable();
            $table->foreignId('publisher_id')->nullable();
            $table->unique(['book_id', 'publisher_id']);
        });
        
    }


// unsignedBigInteger
    // id - unsigned big integer, auto increment, primary key
// book_id - unsigned big integer (foreign id), nullable - a reference to another record from the same table

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
