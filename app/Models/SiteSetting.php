<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'site_name', 'hero_eyebrow', 'hero_title', 'hero_subtitle', 'meta_description',
        'founder_name', 'contact_email', 'whatsapp_number', 'instagram_handle',
        'instagram_url', 'response_time', 'availability_text', 'footer_tagline',
        'work_eyebrow', 'work_heading', 'work_subtext',
        'services_eyebrow', 'services_heading', 'services_subtext',
        'process_eyebrow', 'process_heading', 'process_subtext',
        'why_eyebrow', 'why_heading',
        'testimonials_eyebrow', 'testimonials_heading',
        'faq_eyebrow', 'faq_heading',
        'contact_heading', 'contact_subtext',
    ];

    public static function current(): self
    {
        return static::first() ?? static::create([]);
    }
}
