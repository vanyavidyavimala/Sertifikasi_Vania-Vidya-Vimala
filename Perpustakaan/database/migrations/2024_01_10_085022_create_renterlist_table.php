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
        Schema::create('renterlist', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(App\Models\Book::class);
            $table->string('book_title');
            $table->string('name');
            $table->date('rent_date');
            $table->date('return_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('renterlist');
    }
};
