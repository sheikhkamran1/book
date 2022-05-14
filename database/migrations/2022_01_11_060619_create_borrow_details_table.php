<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrow_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId("borrow_id");
            $table->foreignId("book_id");
            $table->integer("quantity");
            $table->integer("rate");
            $table->integer("amount");
            $table->date("expire_date");
            $table->boolean("is_book_returned");
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
        Schema::dropIfExists('borrow_details');
    }
}
