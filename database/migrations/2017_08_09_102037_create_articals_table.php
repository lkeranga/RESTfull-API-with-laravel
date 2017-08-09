<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articals', function(Blueprint $table) {
            $table->increments('id');
            $table->int('auth_id');
            $table->string('title');
            $table->string('url')->unique();
            $table->string('content');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
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
        Schema::drop('articals');
    }
}
