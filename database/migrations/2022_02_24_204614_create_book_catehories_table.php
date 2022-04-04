<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookCatehoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookitem_catehory', function (Blueprint $table) {
            $table->integer('bookitem_id')->unsigned();
            $table->bigInteger('catehory_id')->unsigned();

        $table->foreign('bookitem_id')
            ->references('id')
            ->on('bookitems')
            ->onDelete('cascade');
  
        $table->foreign('catehory_id')
            ->references('id') 
            ->on('catehories')
            ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_catehories');
    }
}
