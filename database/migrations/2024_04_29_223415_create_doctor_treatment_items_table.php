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
        Schema::create('doctor_treatment_items', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->comment('醫生id');
            $table->string('treatment_item_id')->comment('治療項目id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_treatment_items');
    }
};
