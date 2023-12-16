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
        Schema::create('musics', function (Blueprint $table) {
            $table->id();
            $table->string('music_name', 200);
            $table->string('imageURL', 5000);
            $table->longText('description');
            $table->longText('detail');
            $table->longText('Profesional_review');
            $table->date('publication_date')->format('d.m.Y');
            $table->foreignId('creators_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musics');
    }
};
