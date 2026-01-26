<?php

namespace App\Observers;

use App\Models\Project;

class ProjectObserver
{
    /**
     * Handle the Project "updated" event.
     */
    public function updated(Project $project): void
    {
        if ($project->isDirty('images')) {
            $originalImages = $project->getOriginal('images') ?? [];
            $newImages = $project->images ?? [];

            // Find images that were removed
            $removedImages = array_diff($originalImages, $newImages);

            foreach ($removedImages as $image) {
                if ($image) {
                    \Illuminate\Support\Facades\Storage::disk('public')->delete($image);
                }
            }
        }
    }

    /**
     * Handle the Project "deleted" event.
     */
    public function deleted(Project $project): void
    {
        if ($project->images) {
            foreach ($project->images as $image) {
                if ($image) {
                    \Illuminate\Support\Facades\Storage::disk('public')->delete($image);
                }
            }
        }
    }

    /**
     * Handle the Project "restored" event.
     */
    public function restored(Project $project): void
    {
        //
    }

    /**
     * Handle the Project "force deleted" event.
     */
    public function forceDeleted(Project $project): void
    {
        if ($project->images) {
            foreach ($project->images as $image) {
                if ($image) {
                    \Illuminate\Support\Facades\Storage::disk('public')->delete($image);
                }
            }
        }
    }
}
