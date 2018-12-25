<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('name')->unique();
            $table->boolean('can_edit_admin')->default(false);
            $table->boolean('can_view_article')->default(false);
            $table->boolean('can_edit_article')->default(false);
            $table->boolean('can_view_contact')->default(false);
            $table->boolean('can_edit_contact')->default(false);
            $table->boolean('can_view_office')->default(false);
            $table->boolean('can_edit_office')->default(false);
            $table->boolean('can_view_entity')->default(false);
            $table->boolean('can_edit_entity')->default(false);
            $table->json('entity_list')->default('[]');
            $table->boolean('can_edit_field')->default(false);
            $table->boolean('can_view_report')->default(false);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
        });

        Schema::dropIfExists('roles');
    }
}
