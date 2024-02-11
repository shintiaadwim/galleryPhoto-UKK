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
        Schema::create('photos', function (Blueprint $table) {
            $table->id('fotoid');
            $table->string('judulfoto');
            $table->text('deskripsifoto');
            $table->timestamps();
            $table->string('lokasifile');
            $table->foreignId('albumid')->references('albumid')->on('albums');
            $table->foreignId('adminid')->references('adminid')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
