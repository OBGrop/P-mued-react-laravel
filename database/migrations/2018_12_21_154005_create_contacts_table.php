<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('email', 250)->nullable();
            $table->string('prefix', 50)->nullable();
            $table->string('first_name', 250)->nullable();
            $table->string('last_name', 250)->nullable();
            $table->string('position', 250)->nullable();
            $table->string('department', 250)->nullable();
            $table->string('postal_code', 5)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('mobile', 50)->nullable();
            $table->string('image_path', 250)->nullable();
            $table->unsignedInteger('office_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
