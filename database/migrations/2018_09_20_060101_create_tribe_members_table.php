<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTribeMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tribe_members', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('tribe_id');
            $table->integer('user_id');
            $table->text('message');
            $table->tinyInteger('status')->comment('1: Pending, 2: Accept, 3: Decline')->default(1);

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
        Schema::dropIfExists('tribe_members');
    }
}
