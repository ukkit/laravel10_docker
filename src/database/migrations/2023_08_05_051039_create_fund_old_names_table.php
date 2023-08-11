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
        Schema::create('fund_old_names', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fund_masters_id');
            $table->string('old_name_1');
            $table->date('old_name_1_added_on');
            $table->string('old_name_2');
            $table->date('old_name_2_added_on');
            $table->string('old_name_3');
            $table->date('old_name_3_added_on');
            $table->string('old_name_4');
            $table->date('old_name_4_added_on');
            $table->string('old_name_5');
            $table->date('old_name_5_added_on');
            $table->string('old_name_6');
            $table->date('old_name_6_added_on');
            $table->string('old_name_7');
            $table->date('old_name_7_added_on');
            $table->string('old_name_8');
            $table->date('old_name_8_added_on');
            $table->timestamps();

            $table->foreign('fund_masters_id')->references('id')->on('fund_masters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fund_old_names');
    }
};
