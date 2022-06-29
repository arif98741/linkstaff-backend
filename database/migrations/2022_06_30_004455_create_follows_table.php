<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->id();
            $table->integer('follow_by');
            $table->integer('follow_to')->nullable();
            $table->integer('follow_page')->nullable();
            $table->foreign('follow_by')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('follow_to')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->foreign('follow_page')->references('id')->on('pages')
                ->onUpdate('cascade')
                ->onDelete('set null');


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
        Schema::dropIfExists('follows');
    }
}
