<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('role');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('storename');
            $table->string('website');
            $table->char('password');
            $table->timestamps();
        });

        // Schema::table('admins', function(Blueprint $kolom){
        //     $kolom->foreign('role_id')
        //     ->references('id')
        //     ->on('roles')
        //     ->onDelete('cascade')
        //     ->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
