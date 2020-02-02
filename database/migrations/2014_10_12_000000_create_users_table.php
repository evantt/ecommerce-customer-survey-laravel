<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::enableForeignKeyConstraints();

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('address')->nullable();
            $table->string('occupation')->nullable();
            $table->BigInteger('country_id');
            $table->string('birthdate');
            $table->char('zip_code');
            $table->BigInteger('survey_id');
            $table->char('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Schema::create('roles', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->timestamps();
        // });
        
        // Schema::table('users', function(Blueprint $kolom){
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
        Schema::dropIfExists('users');
    }
}
