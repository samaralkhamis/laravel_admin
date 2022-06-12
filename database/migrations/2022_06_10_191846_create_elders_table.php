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
            $table->integer('time_needed');
            $table->enum('gender', ['Male','Female']);
            $table->string('location');
            $table->string('guardian_name');
            $table->integer('guardian_number');
            $table->integer('guardian_relation');
            $table->integer('guardian_id_pic');
            $table->boolean('is_accepted');
            $table->boolean('is_deleted');



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
