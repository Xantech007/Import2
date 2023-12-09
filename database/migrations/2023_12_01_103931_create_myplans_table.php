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
        Schema::create('myplans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('invest_id');
            $table->string('plan_name');
            $table->string('invested_amount');
            $table->string('profit_earned');
            $table->string('daily_profit');
            $table->string('total_return');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('myplans');
    }
};
