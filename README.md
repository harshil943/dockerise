![GitHub release (latest by date)](https://img.shields.io/github/v/release/harshil943/dockerise?label=Release&style=flat-square)

# dockerise
Package to dockerise laravel project

steps to dockerise
1. composer require harshil/dockerise
2. php artisan vendor:publish --provider="DockerLaravelSetupServiceProvider"
3. docker-compose build
4. docker-compose up -d

