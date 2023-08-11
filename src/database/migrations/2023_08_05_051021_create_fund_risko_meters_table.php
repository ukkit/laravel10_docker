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
        Schema::create('fund_risko_meters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fund_masters_id');
            $table->string('riskometer');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('fund_masters_id')->references('id')->on('fund_masters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fund_risko_meters');
    }
};
