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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->default('Shipped.');
            $table->string('hero_eyebrow')->nullable();
            $table->string('hero_title')->nullable();
            $table->text('hero_subtitle')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('founder_name')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('instagram_handle')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('response_time')->nullable();
            $table->string('availability_text')->nullable();
            $table->text('footer_tagline')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
