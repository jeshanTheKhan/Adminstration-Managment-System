<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('std_id');
            $table->string('name');
            $table->string('f_name');
            $table->string('m_name');
            $table->string('dob');
            $table->string('address');
            $table->string('email');
            $table->string('number');
            $table->string('g_name');
            $table->string('g_number');
            $table->string('g_rel');
            $table->integer('dep');
            $table->string('s_id');
            $table->string('s_batch');
            $table->string('s_section');
            $table->string('image');
            $table->integer('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
