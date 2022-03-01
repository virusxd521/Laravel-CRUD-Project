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
        Schema::create('author_book', function (Blueprint $table){
             $table->bigIncrements('id');
             $table->foreignId('author_id')->nullable();
             $table->foreignId('book_id')->nullable();
             $table->unique(['book_id', 'author_id']);
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
    }
};
