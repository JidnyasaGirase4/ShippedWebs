<?php

namespace Database\Seeders;

use App\Models\Enquiry;
use App\Models\Faq;
use App\Models\ProcessStep;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\Stat;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\WhyItem;
use App\Models\WorkItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            ['name' => 'Admin', 'password' => bcrypt('password'), 'is_admin' => true]
        );

        SiteSetting::query()->delete();
        SiteSetting::create([
            'site_name' => 'Shipped.',
            'hero_eyebrow' => 'WEB DEVELOPMENT, RUN LIKE INFRASTRUCTURE',
            'hero_title' => 'Your website, shipped — not just designed.',
            'hero_subtitle' => "Most web builders hand you a design and disappear. We're an engineering team — we build your site the way we build production systems: fast, monitored, and made to stay up. Landing pages to full web apps.",
            'meta_description' => 'A DevOps engineer builds your website like a production system — fast, monitored, and made to stay up. Landing pages to full web apps, live in days.',
            'founder_name' => 'Rohit Parmar',
            'contact_email' => 'hello@shippedwebs.com',
            'whatsapp_number' => '917499050131',
            'instagram_handle' => '@shippedwebs',
            'instagram_url' => 'https://instagram.com/shippedwebs',
            'response_time' => 'within 24 hours',
            'availability_text' => 'AVAILABLE FOR NEW PROJECTS',
            'footer_tagline' => 'Websites built and deployed like production infrastructure — fast, monitored, and made to stay up.',
            'work_eyebrow' => 'SELECTED WORK',
            'work_heading' => 'Sites we’ve shipped — open them yourself.',
            'work_subtext' => 'Both are live in production. Open them and see.',
            'services_eyebrow' => 'WHAT I BUILD',
            'services_heading' => 'One developer, every layer of the stack.',
            'services_subtext' => "Whatever stage your business is at, there's a build that fits it.",
            'process_eyebrow' => 'HOW IT WORKS',
            'process_heading' => 'A pipeline, not a black box.',
            'process_subtext' => "You'll know exactly what stage your site is at, every step of the way.",
            'why_eyebrow' => 'WHY WORK WITH ME',
            'why_heading' => 'Built by someone who keeps systems running for a living.',
            'testimonials_eyebrow' => 'WHAT CLIENTS SAY',
            'testimonials_heading' => 'A few words from recent launches.',
            'faq_eyebrow' => 'FAQ',
            'faq_heading' => 'Before you ask — answered.',
            'contact_heading' => "Let's ship your website.",
            'contact_subtext' => "Tell me what you're building and I'll send a quote and timeline — usually within a day.",
        ]);

        $stats = [
            ['number' => '15+', 'label' => 'Sites shipped'],
            ['number' => '<24h', 'label' => 'Avg. response time'],
            ['number' => '100%', 'label' => 'Still online, still yours'],
            ['number' => '2d–6w', 'label' => 'Typical launch window'],
        ];
        foreach ($stats as $i => $s) {
            Stat::create($s + ['sort_order' => $i]);
        }

        $work = [
            [
                'title' => 'DG Fitness Club',
                'category' => 'Gym · Nandurbar',
                'url' => 'https://dgfitnessclub.com',
                'display_url' => 'dgfitnessclub.com',
                'screenshot' => 'images/work-dgfitness.webp',
                'description' => "Programs, trainers, membership and gallery — one fast page.",
                'tags' => 'Static site, Custom domain',
            ],
            [
                'title' => 'Orchid Salon & Academy',
                'category' => 'Salon · Bangalore',
                'url' => 'https://musical-snickerdoodle-0a4b9f.netlify.app/',
                'display_url' => 'musical-snickerdoodle-0a4b9f.netlify.app',
                'screenshot' => 'images/work-orchid.webp',
                'description' => 'Makeup, hair, skin and spa menus, gallery and bookings.',
                'tags' => 'Static site, Booking flow',
            ],
        ];
        foreach ($work as $i => $w) {
            WorkItem::create($w + ['sort_order' => $i, 'is_live' => true]);
        }

        $services = [
            ['title' => 'Landing page', 'description' => 'One fast page, built to turn visitors into enquiries.'],
            ['title' => 'Static website', 'description' => 'A handful of pages, no backend — your full presence online.'],
            ['title' => 'Dynamic website with admin panel', 'description' => 'Logins, a database, and a panel you update yourself.'],
            ['title' => 'E-commerce website with admin panel', 'description' => 'Cart, payments, and orders — all managed by you.'],
        ];
        foreach ($services as $i => $s) {
            Service::create($s + ['sort_order' => $i]);
        }

        $process = [
            ['title' => 'Design', 'description' => 'We lock down what the site needs to do and how it should feel — no guessing later.'],
            ['title' => 'Build', 'description' => 'I build it in focused sprints and share progress, not just a final reveal.'],
            ['title' => 'Deploy', 'description' => 'Domain, hosting, security — set up properly, the way production systems are.'],
            ['title' => 'Live', 'description' => 'Your site goes live, and stays your call for updates, forever — no lock-in.'],
        ];
        foreach ($process as $i => $p) {
            ProcessStep::create($p + ['sort_order' => $i]);
        }

        $why = [
            ['title' => 'Uptime mindset', 'description' => "I don't just launch sites — I think about what keeps them online, secure, and fast, months later."],
            ['title' => 'Fast delivery', 'description' => "Simple sites live in days, not weeks — no waiting on a big agency's queue."],
            ['title' => 'You own everything', 'description' => 'Your domain, your hosting, your files. No lock-in, no disappearing after payment.'],
        ];
        foreach ($why as $i => $w) {
            WhyItem::create($w + ['sort_order' => $i]);
        }

        $testimonials = [
            [
                'name' => 'Sameer Solanki', 'role' => 'DG Fitness Club', 'avatar_letter' => 'S',
                'quote' => "Honestly, we were worried about finding someone who would actually care about our gym's needs. ShippedWebs delivered beyond what we expected. The website runs like a dream, and the whole process felt effortless. Highly recommend if you want a website you can actually trust.",
            ],
            [
                'name' => 'Arjun K.', 'role' => 'Clinic owner', 'avatar_letter' => 'A',
                'quote' => 'Felt like handing my site to an engineer, not just a designer. Contact form, hosting, domain — all sorted without me chasing anything.',
            ],
            [
                'name' => 'Sana T.', 'role' => 'Consultant', 'avatar_letter' => 'S',
                'quote' => 'Clear pricing upfront, no surprise invoices later. Updates since launch have been quick to turn around too.',
            ],
        ];
        foreach ($testimonials as $i => $t) {
            Testimonial::create($t + ['sort_order' => $i]);
        }

        $faqs = [
            ['question' => 'Do you handle hosting and the domain too?', 'answer' => "Yes — I can set up hosting and connect your domain as part of the build, or work with whatever you already have. Either way, the accounts stay in your name."],
            ['question' => 'How do I pay?', 'answer' => "Every project starts with a 40–50% advance to begin work, with the balance due on delivery. You can pay via UPI, a Razorpay payment link, or direct bank transfer — whichever's easiest for you. I'll share the payment link/details at each milestone."],
            ['question' => 'What if I need changes after the site is live?', 'answer' => 'Every package includes revision rounds before launch. After that, one-off updates (like text or image changes) are quick paid turnarounds — usually same-day. If you\'ll need regular updates, the Care Plan covers a few small changes every month at a lower cost than one-off requests.'],
            ['question' => 'What tech stack do you build with?', 'answer' => 'Depends on scope — static HTML/CSS for simple sites, React or similar for anything dynamic, with proper hosting and monitoring set up either way.'],
            ['question' => 'Can I make edits myself later?', 'answer' => "You always own the code and hosting, so nothing's locked away from you. For landing pages and static sites, most clients find it faster to just message me for edits rather than dig into code — that's what one-off updates or the Care Plan are for. For dynamic and e-commerce builds, I set up a simple admin panel so you can manage things like products or key content yourself."],
            ['question' => 'Do you handle marketing after the site is live?', 'answer' => "Yes — as a separate add-on, not part of the build. I set up your Google Business Profile and Instagram, and can run monthly content on a retainer. I don't promise follower counts or guaranteed growth — just consistent visibility and a presence that's actually maintained."],
        ];
        foreach ($faqs as $i => $f) {
            Faq::create($f + ['sort_order' => $i]);
        }
    }
}
