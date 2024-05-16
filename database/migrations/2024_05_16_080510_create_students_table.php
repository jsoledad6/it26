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
            $table->id();
            $table->string('studID', 11);
            $table->string('studFirstName', 25);
            $table->string('studLastName', 25);
            $table->string('studMiddleName', 25);
            $table->string('studAge', 2);
            $table->string('studGender', 6);
            $table->string('studEmail', 50);
            $table->string('studContact');
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
