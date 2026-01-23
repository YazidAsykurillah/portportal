<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = \Spatie\Sitemap\Sitemap::create()
            ->add(\Spatie\Sitemap\Tags\Url::create('/'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/about'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/contact'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/blog'))
            ->add(\Spatie\Sitemap\Tags\Url::create('/portfolio'));

        \App\Models\Project::where('status', 'published')->get()->each(function ($project) use ($sitemap) {
            $sitemap->add(\Spatie\Sitemap\Tags\Url::create("/portfolio/{$project->slug}"));
        });

        \App\Models\Post::where('status', 'published')->get()->each(function ($post) use ($sitemap) {
            $sitemap->add(\Spatie\Sitemap\Tags\Url::create("/blog/{$post->slug}"));
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));
        
        $this->info('Sitemap generated successfully.');
    }
}
