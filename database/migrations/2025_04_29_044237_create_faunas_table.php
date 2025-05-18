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
        Schema::create('faunas', function (Blueprint $table) {
                $table->id('fauna_id');
                $table->unsignedBigInteger('admin_id');
                $table->string('nama_fauna');
                $table->string('nama_latin')->nullable();
                $table->string('habitat')->nullable();
                $table->string('status_konservasi')->nullable();
                $table->string('gambar_fauna')->nullable(); 
                $table->text('deskripsi_fauna')->nullable();
                $table->timestamps();

                $table->foreign('admin_id')->references('admin_id')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faunas');
    }
};
