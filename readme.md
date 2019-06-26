## Despliegue para Desarrollo Local

**Pre-requisitos** (se recomienda usar lamp para linux ó laragon para windows)
- PHP >= 7.2 
- Apache2
- git
- MYSQL o MariaDB
- phpmyadmin
- Node.js >= 8.1
- npm >= 3.5

**Pasos para despliegue local**

1.- git clone https://github.com/MunicipalidadDeVillaAlemana/jpl

2.- cd jpl

3.- npm install

4.- composer install

5.- php artisan key:generate

6.- Editar .env de ser necesario (APP_URL=http://localhost)
