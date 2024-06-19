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
        Schema::create('partnership_and_sponsorships', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Partnership', 'Sponsorship']);
            $table->text('description');
            $table->text('benefits');
            $table->string('contact_person');
            $table->string('contact_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partnership_and_sponsorships');
    }
};
