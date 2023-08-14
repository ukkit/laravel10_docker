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
        Schema::create('fund_expense_ratios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fund_masters_id');
            $table->float('regular_plan_base_ter', 2, 2); //in percentage
            $table->float('regular_plan_additonal_expense', 2, 2)->default('0');
            $table->float('regular_plan_gst', 2, 2); //in percentage
            $table->float('direct_plan_base_ter', 2, 2); //in percentage
            $table->float('direct_plan_additonal_expense', 2, 2)->default('0');
            $table->float('direct_plan_gst', 2, 2); //in percentage

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
        Schema::dropIfExists('fund_expense_ratios');
    }
};
