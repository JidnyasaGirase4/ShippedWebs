<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkItem extends Model
{
    protected $fillable = [
        'title', 'category', 'url', 'display_url', 'screenshot',
        'description', 'tags', 'is_live', 'sort_order',
    ];

    protected $casts = [
        'is_live' => 'boolean',
    ];

    public function tagList(): array
    {
        return $this->tags ? array_map('trim', explode(',', $this->tags)) : [];
    }

    public function getScreenshotUrlAttribute(): ?string
    {
        if (! $this->screenshot) {
            return null;
        }

        if (str_starts_with($this->screenshot, 'images/')) {
            return asset($this->screenshot);
        }

        return asset('storage/'.$this->screenshot);
    }
}
