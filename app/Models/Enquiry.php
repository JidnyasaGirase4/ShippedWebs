<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'type', 'name', 'email', 'phone', 'project_type', 'budget',
        'details', 'requested_date', 'requested_time', 'timezone', 'status',
    ];
}
