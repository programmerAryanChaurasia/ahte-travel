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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->text('title_tag')->nullable();
            $table->text('robots_tag')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_subject')->nullable();
            $table->text('meta_revised')->nullable();
            $table->text('meta_abstract')->nullable();
            $table->text('meta_topic')->nullable();
            $table->text('meta_summary')->nullable();
            $table->text('meta_distribution')->nullable();
            $table->text('meta_category')->nullable();
            $table->text('meta_auther')->nullable();
            $table->text('meta_language')->nullable();
            $table->text('meta_auther_and_email')->nullable();
            $table->text('meta_coverage')->nullable();
            $table->text('meta_rating')->nullable();
            $table->string('thumbnail_image')->nullable();
            $table->string('thumbnail_image_alt')->nullable();
            $table->string('thumbnail_image_position')->nullable();

            $table->longText('title');
            $table->longText('sort_description');
            $table->longText('long_description');

            $table->unsignedBigInteger('sub_categories_id');
            $table->foreign('sub_categories_id')->references('id')->on('sub_categories')->onDelete('cascade');

            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');


            $table->string('slug');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
