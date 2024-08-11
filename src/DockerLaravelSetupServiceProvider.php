<?php

namespace harshil\dockerise;

use Illuminate\Support\ServiceProvider;

class DockerLaravelSetupServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish Docker setup files
        $this->publishes([
            __DIR__ . '/../docker-config/docker' => base_path('docker'),
            __DIR__ . '/../docker-config/nginx' => base_path('nginx'),
            // __DIR__ . '/../php' => base_path('php'),
            __DIR__ . '/../docker-config/docker-compose.yaml' => base_path('docker-compose.yaml'),
        ], 'docker-setup');
    }

    public function register()
    {
        //
    }
}
