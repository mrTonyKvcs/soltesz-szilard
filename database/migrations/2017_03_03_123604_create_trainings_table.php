<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('slug', 100)->nullable();
            $table->text('description');
            $table->string('locale', 100);
            $table->string('images_path', 100)->nullable();
            $table->string('video_path', 100)->nullable();
            $table->boolean('full')->default(false);
            $table->integer('price')->nullable();
            $table->integer('max_person')->nullable();
            $table->date('started_at')->nullable();
            $table->date('expired_at')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('trainings');
    }
}
