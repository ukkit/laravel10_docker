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
        Schema::create('fund_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fund_masters_id');
            
            $table->timestamps();

            $table->foreign('fund_masters_id')->references('id')->on('fund_masters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fund_details');
    }
};
