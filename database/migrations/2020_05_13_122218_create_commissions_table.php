<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('price');
            $table->string('details');
            $table->integer('category_id');
            $table->string('conditions');
            $table->integer('rank');
            $table->string('supplement');
            $table->integer('contractor')->nullable();
            $table->integer('commissioner')->nullable();
            $table->integer('delivery_date');
            $table->integer('user_id')->nullable();
            $table->integer('evaluation_id')->nullable();
            $table->integer('evaluation_quarity')->nullable();
            $table->integer('evaluation_limit')->nullable();
            $table->integer('evaluation_total')->nullable();
            $table->integer('status')->nullable();
            $table->dateTime('created_at');
            $table->timestamp('updated_at');
            $table->boolean('delete_flg')->nullable();
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commissions');
    }
}
