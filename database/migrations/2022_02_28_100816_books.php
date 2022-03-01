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
        Schema::create('books', function (Blueprint $table) {
            //
            $table->id();
            $table->string('slug');
            $table->string('title')->nullable();
            $table->foreignId('category_1_id')->nullable();
            $table->foreignId('category_2_id')->nullable();
            $table->foreignId('category_3_id')->nullable();
            $table->foreignId('category_4_id')->nullable();
            $table->foreignId('category_5_id')->nullable();
            $table->float('price')->nullable();
            $table->string('image')->nullable();
            $table->string('publication_date')->nullable();
            $table->string('language')->nullable();
            $table->string('isbn')->nullable();
            $table->string('format')->nullable();
            $table->string('edition')->nullable();
            $table->integer('pages')->nullable();
            $table->text('description')->nullable();
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
        Schema::table('books', function (Blueprint $table) {
            //
        });
    }
};
