<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Calendar

The Calendar project is a time-tracking system that helps users keep track of the number of hours worked, breaks taken, and more.

## Objectives

- Entry of worked hours or break time for the day.
- History of days with worked hours, displayed on a calendar.
- Search for days worked and/or break times.
- Input intervals of days to calculate the total number of hours worked.

## Installation Instructions
To run this project, you need PHP, MySQL, Apache, or Nginx installed. For more information, refer to [Laravel's recommendations](https://laravel.com/docs/8.x).

### Steps:

1. Clone the repository: `git clone https://github.com/raortega8906/calendar.git`
2. `$ cd calendar`
3. `$ composer install`
4. `$ cp .env.example .env`
5. `$ php artisan key:generate`
6. Create a database in **MySQL** or **SQLite**
7. Add database credentials in the `.env` file
8. `$ php artisan migrate --seed`
9. `$ php artisan serve`
10. Log in with:
    - email: `admin@admin.com`
    - password: `password`

## Deployed Demo

https://calendar.wpcache.es/

## License

The project is open source.

## Next Steps

You are now free to start using Calendar.
