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
        Schema::create('social_securities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fed_case_id');
            $table->foreign('fed_case_id')->references('id')->on('fed_cases')->onDelete('cascade');
            $table->float('amount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_securities');
    }
};
