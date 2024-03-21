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
        Schema::create('candidature_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_files')->constrained();
            $table->foreignId('id_candidature')->constrained();
            // $table->string('id_files');
            // $table->string('id_candidature');
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
        //
    }
};
