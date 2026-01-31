<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        Course::create([
            'title' => 'Soul Renewal Journey',
            'slug' => 'soul-renewal-journey',
            'description' => 'A comprehensive 8-week online program to realign your energy and find your true north.',
            'price' => 297.00,
            'image_url' => 'https://picsum.photos/seed/soulrenewal/800/600',
            // 'stripe_product_id' => 'prod_xyz', // Needs to be updated with real ID later
        ]);

        Course::create([
            'title' => 'Transpersonal Family Constellations',
            'slug' => 'family-constellations',
            'description' => 'Heal ancestral patterns and find your place in the family system. 4-week intensive.',
            'price' => 149.00,
            'image_url' => 'https://picsum.photos/seed/constellations/800/600',
        ]);

        Course::create([
            'title' => 'Soul Energy Healing',
            'slug' => 'soul-energy-healing',
            'description' => 'Learn the fundamentals of energy healing to balance your chakras and aura.',
            'price' => 99.00,
            'image_url' => 'https://picsum.photos/seed/energy/800/600',
        ]);

        Course::create([
            'title' => 'Mandalas Art-Therapy',
            'slug' => 'mandalas-art-therapy',
            'description' => 'Unlock your subconscious through the sacred art of Mandalas. No artistic skill required.',
            'price' => 49.00,
            'image_url' => 'https://picsum.photos/seed/mandalas/800/600',
        ]);
    }
}
