<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elders', function (Blueprint $table) {
            $table->bigIncrements('elder_id');
            $table->string('name');
            $table->integer('age');
            $table->integer('phone_num');
            $table->enum('needed_services',['Cleaning','Transportation','Provide_needs','Personal_hygiene','Personal_check',]);
            $table->dateTime('time_needed');
            $table->enum('gender', ['Male','Female']);
            $table->string('location');
            $table->string('guardian_name');
            $table->integer('guardian_number');
            $table->string('guardian_relation');
            $table->string('guardian_id_pic');
            $table->boolean('is_accepted')->default('0');
            $table->boolean('is_deleted')->default('0');
            $table->boolean('job_taken')->default('0');
            $table->integer('volunteer_id')->nullable();;
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
        Schema::dropIfExists('elders');
    }
}
