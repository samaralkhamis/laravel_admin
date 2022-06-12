<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('request_id');
            $table->string('elder_name');
            $table->integer('elder_age');
            $table->enum('gender', ['Male','Female']);
            $table->string('location');
            $table->integer('elder_phone_number');
            $table->enum('needed_services',['Cleaning','Transportation','Provide_needs','Personal_hygiene','Personal_check',]);
            $table->dateTime('date');



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
        Schema::dropIfExists('requests');
    }
}
