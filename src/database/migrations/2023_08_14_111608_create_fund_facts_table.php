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
        Schema::create('fund_facts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fund_masters_id');
            $table->text('investment_objective');
            $table->date('inception_date');
            $table->string('fund_managers');
            $table->integer('fund_size');
            $table->float('turnover_ratio', 3, 3);
            $table->float('entry_load', 2, 2);
            $table->float('exit_load', 2, 2);
            $table->string('benchmark_index_1');
            $table->string('benchmark_index_2')->nullable();
            $table->string('benchmark_index_3')->nullable();

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
        Schema::dropIfExists('fund_facts');
    }
};
