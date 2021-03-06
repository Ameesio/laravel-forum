<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->longText('content');
            $table->enum('section', ['kleineVragen', 'groteVragen' ,'onderdelen',]);
            $table->enum('model', ['GSM', 'Zulu' ,'Runner', '200', '300', '600', 'Apache', 'Coguar', 'Crono', 'CX', 'DNA', 'ER', 'Fastbike', 'Freestyle', 'GFR', 'GP', 'KK', 'MX', 'Nexus', 'NGR', 'Citta']);
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
        Schema::dropIfExists('posts');
    }
}
