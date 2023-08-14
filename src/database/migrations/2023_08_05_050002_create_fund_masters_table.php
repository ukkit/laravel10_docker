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
        Schema::create('fund_masters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fund_houses_id');
            $table->unsignedBigInteger('fund_types_id');
            $table->string('fund_name');
            $table->string('fund_table_name');
            $table->string('isin_code');
            $table->string('yfin_code');
            $table->string('amfii_code');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('fund_houses_id')->references('id')->on('fund_houses');
            $table->foreign('fund_types_id')->references('id')->on('fund_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fund_masters');
    }
};
