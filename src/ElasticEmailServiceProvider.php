<?php

namespace Billyct\ElasticEmail;

use ElasticEmailClient\ElasticClient;
use Illuminate\Support\ServiceProvider;
use ElasticEmailClient\ApiConfiguration;

class ElasticEmailServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/elastic.php', 'elastic');
    }

    public function register()
    {
        $this->app->singleton(ElasticClient::class, function() {
            $configuration = new ApiConfiguration([
                'apiUrl' => config('elastic.api_url'),
                'apiKey' => config('elastic.api_key'),
            ]);

            return new ElasticClient($configuration);
        });
    }
}
