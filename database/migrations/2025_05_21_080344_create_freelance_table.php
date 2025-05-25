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
        Schema::create('freelance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelance_id')->constrained(
                table:'users',
                indexName:'freelance_id'
            );
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('username')->unique();
            $table->text('bio');
            $table->text('desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
