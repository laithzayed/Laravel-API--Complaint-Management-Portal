<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subject');
            $table->string('complaintsText');
            $table->enum('case', ['urgent', 'semi-urgent', 'non-urgent']);
            $table->enum('status', ['pending', 'resolved', 'dismissed'])->default('pending');
            $table->enum('sms', ['True', 'False']);
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->timestamps();

             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
}
