<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('price');
            $table->string('description');
            $table->string('spent_at');
            $table->string('spent_on');
            $table->string('account');
            $table->string('subtotal');
            $table->string('tax');
            $table->string('total');
            $table->integer('status');
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
        Schema::dropIfExists('review_expenses');
    }
}
