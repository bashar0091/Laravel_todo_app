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
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('task_name');
            $table->string('task_category');
            $table->string('task_status');
            $table->string('task_assign');
            $table->string('task_priority');
            $table->string('task_due');
            $table->string('task_cuName');
            $table->string('task_mediaSource');
            $table->string('task_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
