<p align="center">
  <img src="https://laravel.com/img/logomark.min.svg" width="80" alt="Laravel Logo">
  <img src="https://vuejs.org/images/logo.png" width="80" alt="Vue.js Logo">
</p>

<h1 align="center">Proyecto Laravel + Vue</h1>

---

## 🚀 Requisitos

Asegúrate de tener instalados los siguientes programas:

- ✅ PHP 8.2
- ✅ MySQL
- ✅ Composer
- ✅ Node.js y npm

---

## ⚙️ Instalación

1. Clona el repositorio:
   ```bash
   git clone https://tu-repo-aqui.git
   cd nombre-del-proyecto

2. Instala las dependencias:
   ```bash
   composer install
   npm install

4. Ejecuta las migraciones:
   ```bash
   php artisan migrate

5. Ejecuta los seeders:
   ```bash
   php artisan db:seed

6. Inicia el servidor de desarrollo:
   ```bash
   npm run dev
   php artisan serve
   
## 🧱 Migraciones y Seeds

Ejecuta los siguientes comandos para preparar la base de datos:

php artisan migrate
php artisan db:seed
php artisan db:seed --class=ProjectSeeder
php artisan db:seed --class=TaskSeeder
