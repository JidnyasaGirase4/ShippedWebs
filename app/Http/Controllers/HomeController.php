<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\ProcessStep;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\Stat;
use App\Models\Testimonial;
use App\Models\WhyItem;
use App\Models\WorkItem;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'settings' => SiteSetting::current(),
            'stats' => Stat::orderBy('sort_order')->get(),
            'workItems' => WorkItem::where('is_live', true)->orderBy('sort_order')->get(),
            'services' => Service::orderBy('sort_order')->get(),
            'processSteps' => ProcessStep::orderBy('sort_order')->get(),
            'whyItems' => WhyItem::orderBy('sort_order')->get(),
            'testimonials' => Testimonial::orderBy('sort_order')->get(),
            'faqs' => Faq::orderBy('sort_order')->get(),
        ]);
    }
}
