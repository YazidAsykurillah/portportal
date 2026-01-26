<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'E-Commerce Platform Redesign',
                'description' => 'A complete overhaul of an existing e-commerce platform focusing on user experience, mobile responsiveness, and conversion rate optimization. Features include a streamlined checkout process, advanced product filtering, and a modern, vibrant UI.',
                'image' => 'projects/ecommerce-platform.png',
                'url' => 'https://example.com/ecommerce-platform',
            ],
            [
                'title' => 'Corporate Brand Website',
                'description' => 'A professional corporate website designed to establish a strong brand presence. The site features a clean layout, intuitive navigation, and high-quality imagery to communicate trustworthiness and expertise. Optimised for SEO and lead generation.',
                'image' => 'projects/corporate-brand.png',
                'url' => 'https://example.com/corporate-brand',
            ],
            [
                'title' => 'SaaS Dashboard UI/UX',
                'description' => 'A comprehensive UI/UX design for a SaaS analytics dashboard. This project involved creating a dark mode interface with neon accents, complex data visualization widgets, and a user-friendly sidebar navigation system.',
                'image' => 'projects/saas-dashboard.png',
                'url' => 'https://example.com/saas-dashboard',
            ],
            [
                'title' => 'Portfolio Website Template',
                'description' => 'A minimalist and elegant portfolio website template tailored for creatives. The design emphasizes whitespace and typography to showcase artwork and design projects effectively, providing a distraction-free viewing experience.',
                'image' => 'projects/portfolio-template.png',
                'url' => 'https://example.com/portfolio-template',
            ],
            [
                'title' => 'Real Estate Listing Portal',
                'description' => 'A modern real estate listing portal with an integrated map view and advanced search functionality. The user interface allows potential buyers to easily browse properties, view high-quality photos, and contact agents.',
                'image' => 'projects/real-estate-portal.png',
                'url' => 'https://example.com/real-estate-portal',
            ],
        ];

        foreach ($projects as $project) {
            Project::create([
                'title' => $project['title'],
                'slug' => Str::slug($project['title']),
                'description' => $project['description'],
                'images' => [$project['image']],
                'url' => $project['url'],
                'status' => 'published',
            ]);
        }
    }
}
