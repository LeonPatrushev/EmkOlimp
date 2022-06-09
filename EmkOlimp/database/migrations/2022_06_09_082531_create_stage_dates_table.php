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
        Schema::create('stage_dates', function (Blueprint $table) {
            $table->id();
            $table->string('stage_name', 255)->unique('stage_name')->nullable(false);
            $table->date('beginning_stage');
            $table->date('end_stage');
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
        Schema::dropIfExists('stage_dates');
    }
};
