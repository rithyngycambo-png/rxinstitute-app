<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('enrollNo');
            $table->unsignedBigInteger('studentID');
            $table->unsignedBigInteger('departmentID');
            $table->date('joinDate');
            $table->double('fee');

            $table->foreign('studentID')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('departmentID')->references('id')->on('departments')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
