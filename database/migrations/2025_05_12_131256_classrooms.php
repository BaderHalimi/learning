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
        Schema::create("classrooms", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("section");
            $table->string("subject");
            $table->string("code")->unique();
            $table->string("thumbnail")->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users','id')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("classrooms");
    }
};
