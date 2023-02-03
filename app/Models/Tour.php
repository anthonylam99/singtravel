<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tour extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table = 'tours';
    protected $fillable = [
        'id',
        'name',
        'avatar',
        'slug',
        'seo_url',
        'seo_content',
        'seo_robot',
        'category',
        'price',
        'sale_price',
        'tour_time',
        'travel_by',
        'tag',
        'description',
        'schedule',
        'calendar_departure',
        'tour_service',
        'tour_cancellation_rules'
    ];

    protected $hidden = [];

    protected $casts = [];
}
