<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('pic')->nullable();
            $table->integer('rank_id')->nullable();
            $table->string('comment')->nullable();
            $table->integer('request_id')->nullable();
            $table->integer('evaluation')->nullable();
            $table->integer('message')->nullable();
            $table->dateTime('created_at');
            $table->timestamp('updated_at');
            $table->boolean('delete_flg')->default(0);
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
