<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MigrateUserData extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users_siew', function (Blueprint $table) {
            $table->id();
            $table->string('user_name', 200);
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->timestamps();
        });

        // DB::statement('INSERT INTO users_siew (user_name, email, password, created_at, updated_at) SELECT name, email, password, created_at, updated_at FROM users');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_siew');
    }
}
