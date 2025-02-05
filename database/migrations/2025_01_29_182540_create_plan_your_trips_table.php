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
        Schema::create('plan_your_trips', function (Blueprint $table) {
            $table->id();
            $table->string('from_city');
            $table->string('to_city');
            $table->integer('number_of_people');
            $table->string('phone_number');
            $table->string('status')->default(0); // Default status is 'pending' and After client ready make it 1 (Ready) and 2 for cancel
            $table->text('response_after_contact')->nullable();
            $table->date('last_contact_date')->nullable();
            $table->date('future_contact_date')->nullable(); // During contact client told future contact date you on ..... date
            $table->string('add_by')->default("User"); //"Admin" ne add kiya h ya user website se
            $table->softDeletes(); // Add soft delete column
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_your_trips');
    }
};
