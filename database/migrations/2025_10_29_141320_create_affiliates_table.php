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
        Schema::create('affiliates', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('cname')->nullable();
            $table->string('phone')->nullable();
            $table->string('wphone')->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('partnership')->nullable();
            $table->string('email')->nullable();
            $table->longText('message')->nullable();
            $table->longText('imageName')->nullable();
            $table->longText('ipaddress')->nullable();
            $table->longText('clocation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliates');
    }
};
