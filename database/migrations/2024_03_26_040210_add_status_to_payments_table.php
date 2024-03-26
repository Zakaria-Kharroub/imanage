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
        Schema::table('payments', function (Blueprint $table) {
            $table->enum('status', ['paid', 'unpaid'])->default('unpaid');
            $table->dropForeign(['student_id']);
            $table->dropForeign(['formation_id']);
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('formation_id')->references('id')->on('formations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            // Dropping the 'status' column
            $table->dropColumn('status');
            // Re-adding onDelete('cascade') to foreign key constraints
            $table->dropForeign(['student_id']);
            $table->dropForeign(['formation_id']);
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('formation_id')->references('id')->on('formations')->onDelete('cascade');
        });
    }
};
