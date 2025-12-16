# Toporia

A modern PHP application skeleton built with Clean Architecture principles.

## Requirements

- **PHP**: >= 8.1
- **Composer**: For dependency management

## Installation

### Via Composer Create-Project (Recommended)

```bash
composer create-project toporia/toporia my-app
cd my-app
```

### Via Git Clone

```bash
git clone https://github.com/Minhphung7820/toporia-toporia.git my-app
cd my-app
composer install
cp .env.example .env
php console key:generate
```

### Docker Setup

```bash
make up           # Start services (app, nginx, mysql, redis)
make setup        # Install dependencies and run migrations
make shell        # Access PHP container
```

## Project Structure

```
app/
├── Domain/              # Pure business entities and repository interfaces
├── Application/         # Use cases, services, handlers
├── Infrastructure/      # Repository implementations, external services
└── Presentation/        # Controllers, Middleware, Views

bootstrap/               # Application bootstrap
config/                  # Configuration files
database/
├── migrations/          # Database migrations
├── factories/           # Model factories
└── seeders/             # Database seeders
public/                  # Public assets and entry point
resources/
├── js/                  # Frontend JavaScript (Vue.js)
├── lang/                # Language files
└── views/               # View templates
routes/                  # Route definitions
storage/                 # Logs, cache, uploads
tests/                   # Test suites
```

## Quick Start

### Start Development Server

```bash
php -S localhost:8000 -t public
```

### Run Migrations

```bash
php console migrate
```

### Create a Controller

```bash
php console make:controller UserController
```

### Create a Model

```bash
php console make:model User
```

### Run Tests

```bash
composer test
```

## Optional Packages

Install additional features as needed:

```bash
# Role & Permission Management
composer require toporia/dominion

# OAuth Authentication (Google, Facebook, GitHub, etc.)
composer require toporia/socialite

# Webhook Handling
composer require toporia/webhook

# MongoDB Support
composer require toporia/mongodb

# Audit Logging
composer require toporia/audit

# Multi-tenancy
composer require toporia/tenancy

# API Versioning
composer require toporia/api-versioning
```

All packages support **auto-discovery** - providers and configs are registered automatically.

## Documentation

See the [docs/](docs/) directory for detailed documentation on:

- Architecture patterns
- ORM and relationships
- Queue and jobs
- Authentication
- And more...

## License

MIT License
