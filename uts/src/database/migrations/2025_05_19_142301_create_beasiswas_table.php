<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('beasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->text('deskripsi');
            $table->text('syarat');
            $table->date('deadline');
            $table->string('link_pendaftaran');
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('beasiswa');
    }
};
