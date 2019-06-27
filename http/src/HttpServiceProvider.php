<?php

namespace Metro\Http;

use Illuminate\Support\ServiceProvider;
use Metro\Http\Helper\Reader;
use Metro\Http\Helper\ReaderInterface;
use Metro\Http\Models\Interfaces\OfferCollectionInterface;
use Metro\Http\Models\Interfaces\OfferInterface;
use Metro\Http\Models\Offer;
use Metro\Http\Models\OfferCollection;

class HttpServiceProvider extends ServiceProvider
{

    protected $commands = [
        'Metro\Http\Commands\CallApi',
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
        $this->app->bind(ReaderInterface::class, Reader::class);
        $this->app->bind(OfferCollectionInterface::class, OfferCollection::class);
        $this->app->bind(OfferInterface::class, Offer::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
