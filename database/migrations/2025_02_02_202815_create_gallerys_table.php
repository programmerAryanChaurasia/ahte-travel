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
        Schema::create('gallerys', function (Blueprint $table) {
            $table->id();
            $table->string('your_name')->nullable();
            $table->string('place_name')->nullable();
            $table->string('text')->nullable();
            $table->string('image')->nullable();
            $table->string('phone')->nullable();
            $table->string('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**    protected $fillable = ['your_name', 'place_name', 'text','image','status'];
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallerys');
    }
};
