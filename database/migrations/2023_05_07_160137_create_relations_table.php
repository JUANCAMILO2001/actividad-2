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
        Schema::table('users', function ($table) {
            $table->foreign('departaments_id')->references('id')->on('departaments')->onUpdate('cascade');
            $table->foreign('schools_id')->references('id')->on('schools')->onUpdate('cascade');

        });
        Schema::table('departaments', function ($table) {
            $table->foreign('countries_id')->references('id')->on('countries')->onUpdate('cascade');
        });
        Schema::table('schools', function ($table) {
            $table->foreign('countries_id')->references('id')->on('countries')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relations');
    }
};
