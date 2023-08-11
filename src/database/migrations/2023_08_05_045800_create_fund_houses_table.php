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
        Schema::create('fund_houses', function (Blueprint $table) {
            $table->id();
            $table->string('fund_house_name');
            $table->string('fund_house_setup_date');
            $table->string('fund_house_website');
            $table->char('is_active', 1)->default('Y');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fund_houses');
    }
};
