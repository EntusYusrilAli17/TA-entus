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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kondisi')->nullable();
            $table->text('permasalahan')->nullable();
            $table->text('tindaklanjut')->nullable();
            $table->text('realisasi')->nullable();
            $table->unsignedBigInteger('aset_id');
            $table->foreign('aset_id')->references('id')->on('asets')->onDelete('cascade');
            $table->unsignedBigInteger('period_id');
            $table->foreign('period_id')->references('id')->on('periods')->onDelete('cascade');
            $table->unsignedBigInteger('kelompok_id');
            $table->foreign('kelompok_id')->references('id')->on('kelompoks')->onDelete('cascade');
            $table->boolean('is_filled')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
