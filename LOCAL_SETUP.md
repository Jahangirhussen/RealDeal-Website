# Local Host Run Guide

## Requirement
- PHP installed (already found: PHP 8.3.32 on this PC)

## Run Steps

1. Terminal open koro project folder e:
```
cd "e:\RealDeal_Home - Final - Breackup"
```

2. PHP built-in server start koro:
```
php -S localhost:8000
```

3. Browser e open koro:
```
http://localhost:8000
```

4. Stop korte: terminal e `Ctrl + C`

## Notes
- Kono database/config file lage nai — plain PHP + static assets.
- Port 8000 busy thakle onno port use koro: `php -S localhost:8080`
- Kono `.php` page direct URL diye access hobe, e.g. `http://localhost:8000/about.php`
