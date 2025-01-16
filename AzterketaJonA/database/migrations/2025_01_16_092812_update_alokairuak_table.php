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
        Schema::table('alokairu_taulas', function (Blueprint $table) {
            $table->unsignedBigInteger('etxea_id');
            $table->index('etxea_id');
            $table->foreign('etxea_id')->references('id')->on('etxeas')
           ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alokairu_taulas');
    }
};
