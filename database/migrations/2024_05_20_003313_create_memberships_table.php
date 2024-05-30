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
        Schema::create('membership_types', function (Blueprint $table) {
            $table->id();
            $table->string('type_name');
            $table->integer('durations');
            $table->integer('session');
            $table->string('service');
        });
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->date('join_date');
            $table->date('end_date');
            $table->integer('session_left');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membership_types');
        Schema::dropIfExists('memberships');
    }
};
