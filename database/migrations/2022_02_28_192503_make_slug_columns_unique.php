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
        // Schema::table('books', function (Blueprint $table){
        //     $table->unique('slug');
        // });
        
        Schema::table('publishers', function (Blueprint $table){
            $table->unique('slug');
        });
        
        Schema::table('categories', function (Blueprint $table){
            $table->unique('slug');
        });
        
        Schema::table('authors', function (Blueprint $table){
            $table->unique('slug');
        });
    }
    


    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        // Name convention => name of the table_columnName_indexType 
        // example publishers_slug_unique
        //         Table      Column  indexType

        // Schema::dropIfExists('books_slug_unique');
        Schema::dropIfExists('publishers_slug_unique');
        Schema::dropIfExists('categories_slug_unique');
        Schema::dropIfExists('authors_slug_unique');        
    }
};
