<?php

namespace App\Observers;

use App\Models\Gallery;
use App;

class GalleryObserver
{
    /**
     * Handle the Gallery "created" event.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return void
     */
    public function created(Gallery $gallery)
    {
        App::make(App\Actions\Feeder::class)->save($gallery, 'Gallery', 'created');
    }

    /**
     * Handle the Gallery "updated" event.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return void
     */
    public function updated(Gallery $gallery)
    {
        App::make(App\Actions\Feeder::class)->save($gallery, 'Gallery', 'updated');
    }

    /**
     * Handle the Gallery "deleted" event.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return void
     */
    public function deleted(Gallery $gallery)
    {
        //
    }

    /**
     * Handle the Gallery "restored" event.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return void
     */
    public function restored(Gallery $gallery)
    {
        //
    }

    /**
     * Handle the Gallery "force deleted" event.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return void
     */
    public function forceDeleted(Gallery $gallery)
    {
        //
    }
}
