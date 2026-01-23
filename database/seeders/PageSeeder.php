<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'title' => 'Home',
                'slug' => 'home',
                'meta_title' => 'Asykurillah - Web Designer & Developer',
                'meta_description' => 'I design and build websites that attract, engage, and convert. Professional Web Designer & Developer from Indonesia.',
                'status' => 'published',
            ],
            [
                'title' => 'About',
                'slug' => 'about',
                'meta_title' => 'About Me - Asykurillah',
                'meta_description' => 'Learn more about Asykurillah, a developer who enjoys solving complex problems and building high-performance applications.',
                'status' => 'published',
            ],
            [
                'title' => 'Contact',
                'slug' => 'contact',
                'meta_title' => 'Contact Me - Asykurillah',
                'meta_description' => 'Have a project in mind? Let\'s build something awesome together. Get in touch with me.',
                'status' => 'published',
            ],
            [
                'title' => 'Blog',
                'slug' => 'blog',
                'meta_title' => 'Blog - Asykurillah',
                'meta_description' => 'Thoughts, tutorials, and insights on web development, design, and technology.',
                'status' => 'published',
            ],
            [
                'title' => 'Portfolio',
                'slug' => 'portfolio',
                'meta_title' => 'Portfolio - Asykurillah',
                'meta_description' => 'Selected works and case studies. See what I\'ve built, broken, and fixed again.',
                'status' => 'published',
            ],
        ];

        foreach ($pages as $page) {
            \App\Models\Page::updateOrCreate(
                ['slug' => $page['slug']],
                $page
            );
        }
    }
}
