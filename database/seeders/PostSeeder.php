<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure a user exists to be the author
        $user = User::first() ?? User::factory()->create();

        $posts = [
            [
                'title' => 'The Future of Web Design: Trends to Watch',
                'description' => 'Explore the upcoming trends in web design, from 3D elements to AI-driven layouts.',
                'image' => 'posts/web-design-future.png',
            ],
            [
                'title' => 'Optimizing Laravel Performance for High-Scale Apps',
                'description' => 'Learn how to optimize your Laravel application for high traffic using queues, caching, and database tuning.',
                'image' => 'posts/laravel-performance.png',
            ],
            [
                'title' => 'Understanding Accessibility in Modern UI',
                'description' => 'A deep dive into why accessibility matters and how to implement it in your modern web applications.',
                'image' => 'posts/ui-accessibility.png',
            ],
            [
                'title' => 'Why You Should Switch to Filament PHP',
                'description' => 'Discover the power of Filament PHP for building admin panels and how it boosts productivity.',
                'image' => 'posts/filament-dashboard.png',
            ],
            [
                'title' => 'Deploying Laravel Applications with Docker',
                'description' => 'A step-by-step guide to containerizing and deploying your Laravel application using Docker.',
                'image' => 'posts/docker-deployment.png',
            ],
        ];

        foreach ($posts as $post) {
            Post::create([
                'user_id' => $user->id,
                'title' => $post['title'],
                'slug' => Str::slug($post['title']),
                'content' => $post['description'] . "\n\n" . fake()->paragraphs(3, true),
                'image' => $post['image'],
                'published_at' => fake()->dateTimeBetween('-6 months', 'now'),
                'status' => 'published',
            ]);
        }
    }
}
