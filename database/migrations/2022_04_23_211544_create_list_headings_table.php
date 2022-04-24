<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListHeadingsTable extends Migration
{
    public function up()
    {
        Schema::create('list_headings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('name')->nullable();
            $table->string('detail')->nullable();
            $table->smallInteger('status')->default(0)->comment('0-Yapılacak 1-Tamamlandı 2-Yapılıyor');
            $table->integer('rank')->default(99);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('list_headings');
    }
}
