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
        Schema::rename('post', 'persons');

        // Schema::table('persons', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('full_name', 100);
        //     $table->string('email', 100)->unique();
        //     $table->string('phone', 10)->nullable();
        //     $table->enum('gender', ['M', 'F', 'N'])->default('N');
        //     $table->boolean('is_adult')->default(false);
        //     $table->integer('age')->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
    }
};
