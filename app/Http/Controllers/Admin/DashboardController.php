<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use App\Models\Faq;
use App\Models\Lead;
use App\Models\ProcessStep;
use App\Models\Service;
use App\Models\Stat;
use App\Models\Testimonial;
use App\Models\WhyItem;
use App\Models\WorkItem;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'counts' => [
                'Work items' => WorkItem::count(),
                'Services' => Service::count(),
                'Process steps' => ProcessStep::count(),
                'Why items' => WhyItem::count(),
                'Testimonials' => Testimonial::count(),
                'FAQs' => Faq::count(),
                'Stats' => Stat::count(),
            ],
            'newEnquiries' => Enquiry::where('status', 'new')->count(),
            'latestEnquiries' => Enquiry::latest()->take(5)->get(),
            'newLeads' => Lead::where('status', 'new')->count(),
        ]);
    }
}
