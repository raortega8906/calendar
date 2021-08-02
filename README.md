<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Calendar

El proyecto Calendar es un sistema de control de horas, que le ayuda al usuario a realizar seguimiento de la cantidad de horas trabajadas, descansos, etc.

---

# Desarrollado en Laravel 8.12.

---

## Requerimientos a cumplir

- Entrada de las horas trabajadas o el descanso en el día.
- Historial de días con las horas trabajadas y visualizarlos en un calendario.
- Búsqueda de días trabajadas y/o descanso.
- Entrada de intervalos de días para conocer la cantidad de horas trabajadas.

---

## Como instalar

1. Clonar el repositorio : `git clone https://github.com/raortega8906/calendar.git`
2. `$ cd Mini-CRM`
3. `$ composer install`
4. `$ cp .env.example .env`
5. `$ php artisan key:generate`
6. Crear **BD en MySQL** o **SQLite**
7. **Credenciales de BD** en el archivo `.env`
8. `$ php artisan migrate --seed`
9. `$ php artisan serve`
10. Iniciar sesión con:
    - email : `admin@admin.com`
    - password : `password`

---

## Importante

Para lo anterior es necesario que tenga PHP, MySQL, etc, instalado localmente en su pc, para otras opciones, consulte las recomendaciones de Laravel.

---

## Retroalimentación

No dude en enviar comentarios y problemas encontrados vía email.

---

## Demo desplegado

https://calendarworkweb.herokuapp.com/

---

## Licencia 

El proyecto es de código abierto.

---

## Próximos pasos

Ahora puede comenzar a usar Calendar libremente.
