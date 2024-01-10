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
        Schema::create('_book_collections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('book_code');
            $table->string('book_title');
            $table->string('author');
            $table->mediumText('cover')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_book_collections');
    }
};
