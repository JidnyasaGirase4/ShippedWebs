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
        Schema::table('site_settings', function (Blueprint $table) {
            $table->string('work_eyebrow')->nullable();
            $table->string('work_heading')->nullable();
            $table->string('work_subtext')->nullable();

            $table->string('services_eyebrow')->nullable();
            $table->string('services_heading')->nullable();
            $table->string('services_subtext')->nullable();

            $table->string('process_eyebrow')->nullable();
            $table->string('process_heading')->nullable();
            $table->string('process_subtext')->nullable();

            $table->string('why_eyebrow')->nullable();
            $table->string('why_heading')->nullable();

            $table->string('testimonials_eyebrow')->nullable();
            $table->string('testimonials_heading')->nullable();

            $table->string('faq_eyebrow')->nullable();
            $table->string('faq_heading')->nullable();

            $table->string('contact_heading')->nullable();
            $table->string('contact_subtext')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn([
                'work_eyebrow', 'work_heading', 'work_subtext',
                'services_eyebrow', 'services_heading', 'services_subtext',
                'process_eyebrow', 'process_heading', 'process_subtext',
                'why_eyebrow', 'why_heading',
                'testimonials_eyebrow', 'testimonials_heading',
                'faq_eyebrow', 'faq_heading',
                'contact_heading', 'contact_subtext',
            ]);
        });
    }
};
