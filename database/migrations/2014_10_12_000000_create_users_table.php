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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email', 255)->unique();
            $table->string('name',255)->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('gender')->nullable(false);
            $table->smallInteger('age')->unsigned()->nullable(false);
            $table->string('zodiac')->nullable(false);
            $table->text('description')->nullable(true);
            $table->string('looking_for')->nullable(false);;
            $table->boolean('status')->default(true);
            $table->string('picture')->nullable(true);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
