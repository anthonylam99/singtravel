<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table = 'categories';
    protected $fillable = [
        'id',
        'name',
        'parent',
        'level'
    ];

    protected $hidden = [];
    protected $casts = [];
}
