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
        Schema::create('fund_quantitave_measures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fund_masters_id');
            $table->float('standard_deviation', 2, 2)->comment('for equity funds');
            $table->float('alpha', 3, 3)->comment('for equity funds');
            $table->float('beta', 3, 3)->comment('for equity funds');
            $table->float('sharpe_ratio', 3, 3)->comment('for equity funds');
            $table->float('treynor_ratio', 3, 3)->comment('for equity funds');
            $table->float('r_squared', 3, 3)->nullable();
            $table->float('tracking_error', 3, 3)->nullable()->comment('for passive index funds/EF');
            $table->float('mean_annual_return', 3, 3)->nullable()->comment('for passive index funds/EF');
            $table->float('portfolio_turnover_ratio', 2, 2)->nullable()->comment('for equity funds');

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
        Schema::dropIfExists('fund_quantitave_measures');
    }
};
