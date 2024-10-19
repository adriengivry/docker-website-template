# Docker Website Template

The perfect template to boostrap any web development project!

## Features
- [nginx](https://nginx.org/en/): Powerful web server and reverse proxy.
- [php](https://www.php.net/): Versatile scripting language tailored for web development.
- [composer](https://getcomposer.org/): PHP package manager for easy dependency management.
- [twig](https://twig.symfony.com/): Modern template engine for PHP
- [AltoRouter](https://github.com/dannyvankooten/AltoRouter): Small but powerful routing class.

## Quick Start
1. Create a repository using this template.
2. Clone you repository
3. Open the terminal at the root of your repository and run:
```
docker compose up -d
```
Voilà! 🙂

## Adding a PHP package
1. Browse for your desired package on [Packagist](https://packagist.org/).
2. Edit the `composer.json` file to add the target package.
3. Restart your PHP Docker container or run composer install within the container to update dependencies.

## Notes
This project includes a `docker-compose.proxy.yml` configuration file. This allows you to set up a gateway between your server's nginx installation and the bundled nginx web server, without exposing ports directly on your server.

## Limitations
This template doesn't come with any database setup, as some web apps might not require it. I've kept the components to a minimum to ensure it's lightweight and doesn't include unnecessary features.