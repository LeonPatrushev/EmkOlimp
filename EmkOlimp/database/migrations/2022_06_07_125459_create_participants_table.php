<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('participant_full_name', 255)->nullable(false);
            $table->string('participants_email', 255)->nullable(false)->unique('participants_e-mail');
            $table->string('name_institution', 255)->nullable(false);
            $table->string('specialization', 255)->nullable(false);
            $table->string('course', 255)->nullable(false);
            $table->string('teacher_full_name', 255)->nullable(false);
            $table->string('teacher_phone_number', 255)->nullable(false);
            $table->string('teacher_email', 255)->nullable(false);
            $table->unsignedBigInteger('status_id')->default(1);
            $table->timestamps();

            $table->foreign('status_id')
                ->references('id')
                ->on('statuses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
};
