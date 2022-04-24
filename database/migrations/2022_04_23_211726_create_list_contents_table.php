<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListContentsTable extends Migration
{
    public function up()
    {
        Schema::create('list_contents', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('list_heading_id')->nullable();
            $table->string('name')->nullable();
            $table->string('detail')->nullable();
            $table->boolean('status')->default(0);
            $table->integer('rank')->default(99);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('list_contents');
    }
}
