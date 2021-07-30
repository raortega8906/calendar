<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Sobre “Laravel-Calendar”

Calendar es un sistema de control de horas, que le ayuda al usuario a realizar seguimiento de la cantidad de horas trabajadas, descansos, etc. El sistema es de código abierto y se puede ver y probar en https://calendarworkweb.herokuapp.com/.
   
---

## Demo

Pruebe la versión en https://calendarworkweb.herokuapp.com/
   
---

## Funcionalidades

- Entrada de las horas trabajadas o el descanso en el día.
- Historial de días con las horas trabajadas.
- Búsqueda de días trabajadas y/o descanso.
- Entrada de intervalos de días para conocer la cantidad de horas trabajadas.

## Empezar

https://github.com/raortega8906/calendar

---

## Retroalimentación

No dude en enviar comentarios y problemas encontrados vía email.

---


# Instalación:

---

## Como hacerlo

- Insertar proyecto en carpeta vacía con el comando: git clone https://github.com/raortega8906/calendar
- Crear una base de datos vacía.
- Copie el env.example a .env.
- Configurar base de datos en config/database.php o en su archivo .env.
- Ejecute los siguientes comandos:
    composer install
    php artisan migrate --seed
    php artisan key:generate
    npm install
    npm run dev
- Inicie sesión con las credenciales:
    email: admin@admin.com
    pass: password
- Hecho.

---

## Importante

Para lo anterior es necesario que tenga PHP, MySQL, etc, instalado localmente en su pc, para otras opciones, consulte las   recomendaciones de Laravel.

---

## Próximos pasos

Ahora puede comenzar a usar Calendar libremente.
