<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Filament Test

Este repositorio es un proyecto de prueba para aprender y experimentar con Filament PHP, un framework para crear interfaces de administración en aplicaciones Laravel.

## Descripción

Filament es un framework de administración para Laravel que permite crear interfaces de usuario modernas y reactivas con facilidad. Este repositorio contiene ejemplos y prácticas para familiarizarse con las funcionalidades y características de Filament.

## Requisitos

- PHP >= 7.4
- Laravel >= 8.0
- Composer

## Instalación

1. Clona el repositorio:

    ```sh
    git clone https://github.com/anderson-andres-dev/filament-test.git
    ```

2. Navega al directorio del proyecto:

    ```sh
    cd filament-test
    ```

3. Instala las dependencias de Composer:

    ```sh
    composer install
    ```

4. Crea un archivo `.env` copiando el archivo de ejemplo:

    ```sh
    cp .env.example .env
    ```

5. Genera una nueva clave de aplicación:

    ```sh
    php artisan key:generate
    ```

6. Ejecuta las migraciones de la base de datos:

    ```sh
    php artisan migrate
    ```

## Uso

Para iniciar el servidor de desarrollo, utiliza el siguiente comando:

```sh
php artisan serve
