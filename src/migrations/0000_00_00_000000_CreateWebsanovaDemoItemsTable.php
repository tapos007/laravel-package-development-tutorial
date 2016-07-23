<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsanovaDemoItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websanova_demo_items', function (Blueprint $table) {
            $table->increments('id');
            $table->text('slug', 255);
            $table->text('name', 255);
            $table->text('description', 255);
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
        Schema::drop('websanova_demo_items');
    }
}
