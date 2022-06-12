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
            $table->bigIncrements('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('gender', ['Male','Female']);
            $table->integer('age');
            $table->string('front_id_pic');
            $table->string('back_id_pic');
            $table->enum('needed_services',['Cleaning','Transportation','Provide_needs','Personal_hygiene','Personal_check',]);
            $table->dateTime('time');
            $table->string('car');
            $table->boolean('is_accepted')->default('0');
            $table->boolean('is_deleted')->default('0');
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
