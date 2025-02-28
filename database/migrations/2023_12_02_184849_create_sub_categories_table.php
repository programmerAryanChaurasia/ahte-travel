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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('sub_category');

            $table->unsignedBigInteger('categories_id');
            // Add the foreign key constraint
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');

            $table->text('description')->nullable();
            $table->string('slug');
            $table->string('status');
            $table->boolean('post_action')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_categories');
    }
};
