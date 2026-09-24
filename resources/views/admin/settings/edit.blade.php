@extends('admin.layout')

@section('title', 'Site settings')

@section('content')
  <div class="card">
    <form method="POST" action="{{ route('admin.settings.update') }}">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="site_name">Site name</label>
        <input type="text" id="site_name" name="site_name" value="{{ old('site_name', $item->site_name) }}">
      </div>
      <div class="form-group">
        <label for="hero_eyebrow">Hero eyebrow</label>
        <input type="text" id="hero_eyebrow" name="hero_eyebrow" value="{{ old('hero_eyebrow', $item->hero_eyebrow) }}">
      </div>
      <div class="form-group">
        <label for="hero_title">Hero title</label>
        <input type="text" id="hero_title" name="hero_title" value="{{ old('hero_title', $item->hero_title) }}">
      </div>
      <div class="form-group">
        <label for="hero_subtitle">Hero subtitle</label>
        <textarea id="hero_subtitle" name="hero_subtitle">{{ old('hero_subtitle', $item->hero_subtitle) }}</textarea>
      </div>
      <div class="form-group">
        <label for="meta_description">Meta description</label>
        <textarea id="meta_description" name="meta_description">{{ old('meta_description', $item->meta_description) }}</textarea>
      </div>
      <div class="form-group">
        <label for="founder_name">Founder name</label>
        <input type="text" id="founder_name" name="founder_name" value="{{ old('founder_name', $item->founder_name) }}">
      </div>
      <div class="form-group">
        <label for="contact_email">Contact email</label>
        <input type="email" id="contact_email" name="contact_email" value="{{ old('contact_email', $item->contact_email) }}">
      </div>
      <div class="form-group">
        <label for="whatsapp_number">WhatsApp number</label>
        <input type="text" id="whatsapp_number" name="whatsapp_number" value="{{ old('whatsapp_number', $item->whatsapp_number) }}">
      </div>
      <div class="form-group">
        <label for="instagram_handle">Instagram handle</label>
        <input type="text" id="instagram_handle" name="instagram_handle" value="{{ old('instagram_handle', $item->instagram_handle) }}">
      </div>
      <div class="form-group">
        <label for="instagram_url">Instagram URL</label>
        <input type="text" id="instagram_url" name="instagram_url" value="{{ old('instagram_url', $item->instagram_url) }}">
      </div>
      <div class="form-group">
        <label for="response_time">Response time</label>
        <input type="text" id="response_time" name="response_time" value="{{ old('response_time', $item->response_time) }}">
      </div>
      <div class="form-group">
        <label for="availability_text">Availability text</label>
        <input type="text" id="availability_text" name="availability_text" value="{{ old('availability_text', $item->availability_text) }}">
      </div>
      <div class="form-group">
        <label for="footer_tagline">Footer tagline</label>
        <textarea id="footer_tagline" name="footer_tagline">{{ old('footer_tagline', $item->footer_tagline) }}</textarea>
      </div>

      <h2 style="font-size:16px;margin:28px 0 14px;">Section headings</h2>

      <div class="form-group">
        <label for="work_eyebrow">Work &mdash; eyebrow</label>
        <input type="text" id="work_eyebrow" name="work_eyebrow" value="{{ old('work_eyebrow', $item->work_eyebrow) }}">
      </div>
      <div class="form-group">
        <label for="work_heading">Work &mdash; heading</label>
        <input type="text" id="work_heading" name="work_heading" value="{{ old('work_heading', $item->work_heading) }}">
      </div>
      <div class="form-group">
        <label for="work_subtext">Work &mdash; subtext</label>
        <input type="text" id="work_subtext" name="work_subtext" value="{{ old('work_subtext', $item->work_subtext) }}">
      </div>

      <div class="form-group">
        <label for="services_eyebrow">Services &mdash; eyebrow</label>
        <input type="text" id="services_eyebrow" name="services_eyebrow" value="{{ old('services_eyebrow', $item->services_eyebrow) }}">
      </div>
      <div class="form-group">
        <label for="services_heading">Services &mdash; heading</label>
        <input type="text" id="services_heading" name="services_heading" value="{{ old('services_heading', $item->services_heading) }}">
      </div>
      <div class="form-group">
        <label for="services_subtext">Services &mdash; subtext</label>
        <input type="text" id="services_subtext" name="services_subtext" value="{{ old('services_subtext', $item->services_subtext) }}">
      </div>

      <div class="form-group">
        <label for="process_eyebrow">Process &mdash; eyebrow</label>
        <input type="text" id="process_eyebrow" name="process_eyebrow" value="{{ old('process_eyebrow', $item->process_eyebrow) }}">
      </div>
      <div class="form-group">
        <label for="process_heading">Process &mdash; heading</label>
        <input type="text" id="process_heading" name="process_heading" value="{{ old('process_heading', $item->process_heading) }}">
      </div>
      <div class="form-group">
        <label for="process_subtext">Process &mdash; subtext</label>
        <input type="text" id="process_subtext" name="process_subtext" value="{{ old('process_subtext', $item->process_subtext) }}">
      </div>

      <div class="form-group">
        <label for="why_eyebrow">Why us &mdash; eyebrow</label>
        <input type="text" id="why_eyebrow" name="why_eyebrow" value="{{ old('why_eyebrow', $item->why_eyebrow) }}">
      </div>
      <div class="form-group">
        <label for="why_heading">Why us &mdash; heading</label>
        <input type="text" id="why_heading" name="why_heading" value="{{ old('why_heading', $item->why_heading) }}">
      </div>

      <div class="form-group">
        <label for="testimonials_eyebrow">Testimonials &mdash; eyebrow</label>
        <input type="text" id="testimonials_eyebrow" name="testimonials_eyebrow" value="{{ old('testimonials_eyebrow', $item->testimonials_eyebrow) }}">
      </div>
      <div class="form-group">
        <label for="testimonials_heading">Testimonials &mdash; heading</label>
        <input type="text" id="testimonials_heading" name="testimonials_heading" value="{{ old('testimonials_heading', $item->testimonials_heading) }}">
      </div>

      <div class="form-group">
        <label for="faq_eyebrow">FAQ &mdash; eyebrow</label>
        <input type="text" id="faq_eyebrow" name="faq_eyebrow" value="{{ old('faq_eyebrow', $item->faq_eyebrow) }}">
      </div>
      <div class="form-group">
        <label for="faq_heading">FAQ &mdash; heading</label>
        <input type="text" id="faq_heading" name="faq_heading" value="{{ old('faq_heading', $item->faq_heading) }}">
      </div>

      <div class="form-group">
        <label for="contact_heading">Contact &mdash; heading</label>
        <input type="text" id="contact_heading" name="contact_heading" value="{{ old('contact_heading', $item->contact_heading) }}">
      </div>
      <div class="form-group">
        <label for="contact_subtext">Contact &mdash; subtext</label>
        <input type="text" id="contact_subtext" name="contact_subtext" value="{{ old('contact_subtext', $item->contact_subtext) }}">
      </div>

      <button type="submit" class="btn btn-primary">Save settings</button>
    </form>
  </div>
@endsection
