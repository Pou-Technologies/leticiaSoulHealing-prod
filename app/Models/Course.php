<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'image_url',
        'stripe_product_id', // To link with Stripe
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'course_user')->withTimestamps();
    }
}
