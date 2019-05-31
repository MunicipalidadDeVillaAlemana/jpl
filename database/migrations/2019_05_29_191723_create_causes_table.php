<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCausesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->char('rol', 10);
            $table->char('complainant_name', 100)->nullable($value = true);
            $table->char('denounced_name', 100)->nullable($value = true);
            $table->char('primary_category', 100)->nullable($value = true);
            $table->char('secondary_category', 100)->nullable($value = true);
            $table->char('state', 50)->nullable($value = true);
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
        Schema::dropIfExists('causes');
    }
}
