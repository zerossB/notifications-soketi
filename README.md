# Notifications Socketi

A Websocket implementation in Laravel using Soketi 

## Technologies used

- Laravel 10
- Laravel Sail
- Laravel Breeze
- [Soketi](https://docs.soketi.app)

## Running Locally

1. Copy to .env.example to .env
```bash
cp .env.example .env
```

2. Install composer dependencies.
```bash
composer install
```

3. Download docker images
```bash
sail pull
```

4. Build the docker image
```bash
sail build --no-cache
```

5. Run the server
```bash
sail up -d
```

6. Generate Laravel keys
```bash
sail artisan key:generate
```

7. Migrate the database
```bash
sail artisan migrate
```

8. Access the browser and create your account and log into the system.
[http://localhost](http://localhost)

## Sending the notification

1. Access the page in the browser
[http://localhost/notifications](http://localhost/notifications)

2. Access tinker
```bash
sail artisan tinker
```

3. Send the notification
```bash
event(new \App\Events\RealTimeEvent('RealTimeEvent Icon', 'RealTimeEvent', 1))
```
