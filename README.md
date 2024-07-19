# Simple Laravel API

## Setup

1. Clone the repository
2. Run `composer install`
3. Configure `.env` with your database settings
4. Run `docker-compose up -d`
5. Run `docker-compose exec app php artisan migrate`
6. Start the queue worker with `docker-compose exec app php artisan queue:work`

## Testing

1. Run the tests with `docker-compose exec app php artisan test`

## API Endpoint

- `POST /api/submit`
    - Payload:
      ```json
      {
        "name": "John Doe",
        "email": "john.doe@example.com",
        "message": "This is a test message."
      }
      ```

## Explanation

This API accepts a submission, validates it, and processes it via a job queue. Upon successful processing, it triggers an event to log the submission details.
