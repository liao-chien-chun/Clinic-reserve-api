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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('idno', 50)->index()->comment('身分證');
            $table->string('name')->nullable()->comment('姓名');
            $table->string('gender', 4)->nullable()->comment('性別');
            $table->string('email')->nullable()->unique()->comment('電子郵件');
            $table->string('phone', 10)->nullable()->comment("行動電話");
            $table->string('password')->nullable()->nullable();
            $table->date('birthday')->comment('出生日期');
            $table->string('address', 100)->comment('住址');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
