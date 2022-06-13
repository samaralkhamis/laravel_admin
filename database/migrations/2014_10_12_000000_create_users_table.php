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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lname')->nullable();
            $table->string('img')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('gender', ['Male','Female'])->nullable();
            $table->date('age')->nullable();
            $table->string('front_id_pic')->nullable();
            $table->string('back_id_pic')->nullable();
            $table->enum('needed_services',['Cleaning','Transportation','Provide_needs','Personal_hygiene','Personal_check',])->nullable();
            $table->dateTime('time')->nullable();
            $table->dateTime('timeTo')->nullable();
            $table->string('car')->nullable();
            $table->boolean('is_accepted')->default('0');
            $table->boolean('is_deleted')->default('0');
            $table->boolean('is_admin')->default('0');
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
