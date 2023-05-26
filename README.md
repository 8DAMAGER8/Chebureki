## Deployment instructions

### Deployment back-end
- `copy back/.env.example back/.env`
- `docker-compose up -d`
- `docker compose run php composer install`
- `docker compose run php artisan migrate`

### Deployment front-end
