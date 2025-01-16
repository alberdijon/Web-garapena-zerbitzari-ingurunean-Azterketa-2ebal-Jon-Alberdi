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
        Schema::create('etxeas', function (Blueprint $table) {
            $table->id();
            $table->string('helbidea');
            $table->integer('logelaKopurua');
            $table->date('eraikuntzaUrtea');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etxeas');
    }
};
