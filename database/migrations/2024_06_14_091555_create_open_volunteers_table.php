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
        Schema::create('open_volunteers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('volunteer_type_id')->constrained();
            $table->string('program_name');
            $table->string('slug')->unique();
            $table->string('location');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('description');
            $table->text('requirements');
            $table->text('application_process');
            $table->date('application_deadline');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('open_volunteers');
    }
};
