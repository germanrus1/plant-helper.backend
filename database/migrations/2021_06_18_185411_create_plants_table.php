<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_edibles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();

            $table->bigInteger('create_user_id')->unsigned()->nullable();
            $table->bigInteger('update_user_id')->unsigned()->nullable();

            $table->foreign('create_user_id')->references('id')->on('users');
            $table->foreign('update_user_id')->references('id')->on('users');
        });

        Schema::create('plant_fruits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();

            $table->bigInteger('create_user_id')->unsigned()->nullable();
            $table->bigInteger('update_user_id')->unsigned()->nullable();

            $table->foreign('create_user_id')->references('id')->on('users');
            $table->foreign('update_user_id')->references('id')->on('users');
        });

        Schema::create('plant_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();

            $table->bigInteger('create_user_id')->unsigned()->nullable();
            $table->bigInteger('update_user_id')->unsigned()->nullable();

            $table->foreign('create_user_id')->references('id')->on('users');
            $table->foreign('update_user_id')->references('id')->on('users');
        });

        Schema::create('plant_families', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();

            $table->bigInteger('create_user_id')->unsigned()->nullable();
            $table->bigInteger('update_user_id')->unsigned()->nullable();

            $table->foreign('create_user_id')->references('id')->on('users');
            $table->foreign('update_user_id')->references('id')->on('users');
        });

        Schema::create('plant_photosensitivity', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();

            $table->bigInteger('create_user_id')->unsigned()->nullable();
            $table->bigInteger('update_user_id')->unsigned()->nullable();

            $table->foreign('create_user_id')->references('id')->on('users');
            $table->foreign('update_user_id')->references('id')->on('users');
        });

        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('tags');
            $table->bigInteger('plant_edible_id')->unsigned()->nullable();;
            $table->bigInteger('plant_fruit_id')->unsigned()->nullable();;
            $table->bigInteger('plant_type_id')->unsigned()->nullable();;
            $table->bigInteger('plant_family_id')->unsigned()->nullable();;
            $table->bigInteger('plant_photosensitivity_id')->unsigned()->nullable();;
            $table->bigInteger('create_user_id')->unsigned()->nullable();
            $table->bigInteger('update_user_id')->unsigned()->nullable();
            $table->string('range');
            $table->timestamps();

            $table->foreign('create_user_id')->references('id')->on('users');
            $table->foreign('update_user_id')->references('id')->on('users');
            $table->foreign('plant_edible_id')->references('id')->on('plant_edibles');
            $table->foreign('plant_fruit_id')->references('id')->on('plant_fruits');
            $table->foreign('plant_type_id')->references('id')->on('plant_types');
            $table->foreign('plant_family_id')->references('id')->on('plant_families');
            $table->foreign('plant_photosensitivity_id')->references('id')->on('plant_photosensitivity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plant_families', function (Blueprint $table) {
            $table->dropForeign('plant_families_create_user_id_foreign');
            $table->dropForeign('plant_families_update_user_id_foreign');
        });
        Schema::table('plant_edibles', function (Blueprint $table) {
            $table->dropForeign('plant_edibles_create_user_id_foreign');
            $table->dropForeign('plant_edibles_update_user_id_foreign');
        });
        Schema::table('plant_fruits', function (Blueprint $table) {
            $table->dropForeign('plant_fruits_create_user_id_foreign');
            $table->dropForeign('plant_fruits_update_user_id_foreign');
        });
        Schema::table('plant_types', function (Blueprint $table) {
            $table->dropForeign('plant_types_create_user_id_foreign');
            $table->dropForeign('plant_types_update_user_id_foreign');
        });
        Schema::table('plant_photosensitivity', function (Blueprint $table) {
            $table->dropForeign('plant_photosensitivity_create_user_id_foreign');
            $table->dropForeign('plant_photosensitivity_update_user_id_foreign');
        });

        Schema::table('plants', function (Blueprint $table) {
            $table->dropForeign('plants_create_user_id_foreign');
            $table->dropForeign('plants_update_user_id_foreign');
            $table->dropForeign('plants_plant_edible_id_foreign');
            $table->dropForeign('plants_plant_fruit_id_foreign');
            $table->dropForeign('plants_plant_type_id_foreign');
            $table->dropForeign('plants_plant_family_id_foreign');
            $table->dropForeign('plants_plant_photosensitivity_id_foreign');
        });

        Schema::dropIfExists('plant_edibles');
        Schema::dropIfExists('plant_fruits');
        Schema::dropIfExists('plant_types');
        Schema::dropIfExists('plant_families');
        Schema::dropIfExists('plant_photosensitivity');
        Schema::dropIfExists('plants');
    }
}
