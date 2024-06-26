<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Models\Blog;
use App\Models\Review;
use App\Models\BlogText;
use App\Models\BlogTextPicture;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\Article;



use App\Observers\BlogObserver;
use App\Observers\ReviewObserver;
use App\Observers\BlogTextObserver;
use App\Observers\ServiceObserver;
use App\Observers\GalleryObserver;
use App\Observers\BlogTextPictureObserver;
use App\Observers\ArticleObserver;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Blog::observe(BlogObserver::class);
        BlogText::observe(BlogTextObserver::class);
        BlogTextPicture::observe(BlogTextPictureObserver::class);
        Service::observe(ServiceObserver::class);
        Gallery::observe(GalleryObserver::class);
        Review::observe(ReviewObserver::class);
        Article::observe(ArticleObserver::class);
       
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
