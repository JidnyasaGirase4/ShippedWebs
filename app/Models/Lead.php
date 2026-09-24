<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'first_name', 'email', 'country_code', 'phone', 'what_you_do', 'status',
    ];

    public function whatYouDoLabel(): string
    {
        return match ($this->what_you_do) {
            'founder' => 'Startup Founder',
            'business-owner' => 'Small Business Owner',
            'freelancer' => 'Freelancer / Consultant',
            'agency' => 'Agency',
            'marketer' => 'Marketer',
            default => 'Other',
        };
    }
}
