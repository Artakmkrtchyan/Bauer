<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // Schema::create('requests', function (Blueprint $table) {
      //     $table->unsignedInteger('id');
      //     $table->string('name');
      //     $table->string('email');
      //     $table->unsignedInteger('phone');
      //     $table->text('message');
      //     $table->timestamps();
      // });

      Schema::create('request', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email');
    $table->Integer('phone');
    $table->text('message');
     // $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
