# HNG API - Basic Information API

A simple REST API built with Laravel that returns basic information including a slack email address, current datetime in ISO 8601 format, and the GitHub repository URL.

## Features

- Returns personal information in JSON format
- Handles CORS for cross-origin requests
- Provides current UTC datetime in ISO 8601 format
- JSON pretty print enabled for readable responses


## API Documentation

### Base URL
- Production: `https://hng-api.free.nf`



### Endpoint
- GET `/`

### Response Format
```json
{
    "email": "email",
    "current_datetime": "example-current-datetime",
    "github_url": "https://github.com/Noah-V/HNG-Backend-API"
}

### Local Development Setup

1. **Clone the repository**
git clone "https://github.com/Noah-V/HNG_API.git"

2. **Install Dependencies if need be**
composer install

3. **Set up environment file**
copy .env.example .env
php artisan key:generate

4. **Configure your environment variables in `.env`**
APP_NAME="Example app name"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://example-localhost

5. **Start the server**
php artisan serve

The API will now be available at `http://example-localhost`
