<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function edit()
    {
        return view('admin.settings.edit', ['item' => SiteSetting::current()]);
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'site_name' => ['nullable', 'string', 'max:255'],
            'hero_eyebrow' => ['nullable', 'string', 'max:255'],
            'hero_title' => ['nullable', 'string', 'max:255'],
            'hero_subtitle' => ['nullable', 'string'],
            'meta_description' => ['nullable', 'string'],
            'founder_name' => ['nullable', 'string', 'max:255'],
            'contact_email' => ['nullable', 'email', 'max:255'],
            'whatsapp_number' => ['nullable', 'string', 'max:32'],
            'instagram_handle' => ['nullable', 'string', 'max:255'],
            'instagram_url' => ['nullable', 'string', 'max:255'],
            'response_time' => ['nullable', 'string', 'max:255'],
            'availability_text' => ['nullable', 'string', 'max:255'],
            'footer_tagline' => ['nullable', 'string'],
            'work_eyebrow' => ['nullable', 'string', 'max:255'],
            'work_heading' => ['nullable', 'string', 'max:255'],
            'work_subtext' => ['nullable', 'string', 'max:255'],
            'services_eyebrow' => ['nullable', 'string', 'max:255'],
            'services_heading' => ['nullable', 'string', 'max:255'],
            'services_subtext' => ['nullable', 'string', 'max:255'],
            'process_eyebrow' => ['nullable', 'string', 'max:255'],
            'process_heading' => ['nullable', 'string', 'max:255'],
            'process_subtext' => ['nullable', 'string', 'max:255'],
            'why_eyebrow' => ['nullable', 'string', 'max:255'],
            'why_heading' => ['nullable', 'string', 'max:255'],
            'testimonials_eyebrow' => ['nullable', 'string', 'max:255'],
            'testimonials_heading' => ['nullable', 'string', 'max:255'],
            'faq_eyebrow' => ['nullable', 'string', 'max:255'],
            'faq_heading' => ['nullable', 'string', 'max:255'],
            'contact_heading' => ['nullable', 'string', 'max:255'],
            'contact_subtext' => ['nullable', 'string', 'max:255'],
        ]);

        SiteSetting::current()->update($data);

        return redirect()->route('admin.settings.edit')->with('status', 'Settings updated.');
    }
}
