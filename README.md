<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Projeto em Laravel

Projeto em Laravel v8.* com modulo admin com controle de acl.

-   [BootStrap](https://getbootstrap.com/)
-   [Fontawesome](https://fontawesome.com/)
-   [AdminLTE](https://adminlte.io/)

-   [Laravel sanctum](https://laravel.com/docs/8.x/sanctum)
-   [Laravel livewire](https://laravel-livewire.com/docs/2.x/quickstart)
-   [Laravel permission](https://github.com/spatie/laravel-permission)
-   [Laravel media library](https://github.com/spatie/laravel-medialibrary)
-   [Laravel backup](https://spatie.be/docs/laravel-backup/v7/introduction)
-   [Laravel telescope](https://github.com/laravel/telescope)
-   [Laravel lang](https://github.com/caouecs/Laravel-lang)

## Requisitos

-   [PHP 7.4+]()
-   [Git](https://git-scm.com/)
-   [Composer](http://getcomposer.org/doc/00-intro.md)
-   [Node](https://nodejs.org/en/)
-   [MySQL](https://dev.mysql.com/downloads/installer/)

## Instalação

1. Efetuar a instalação clonando o repositorio.

    ```bash    
    # clonar o projeto    
    cd projeto
    cp .env.example .env
    composer install
    php artisan key:generate
    php artisan storage:link
    yarn install && yarn run dev
    ```

2. Criar o banco de dados com um gerenciador de banco e configurar o arquivo .env nas linhas com os (`seus dados de conexão ao banco de dados`).

   MYSQL

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=homestead
    DB_USERNAME=homestead
    DB_PASSWORD=secret
    ```

   SQLITE

    ```bash
    touch database/database.sqlite
    ```

    ```bash
    DB_CONNECTION=sqlite
    #DB_HOST=127.0.0.1
    #DB_PORT=3306
    #DB_DATABASE=homestead
    #DB_USERNAME=homestead
    #DB_PASSWORD=secret    
    ```

   Criar as tabelas com o migrate e populando
    ```bash
    php artisan migrate --seed
    ```

3. Configurar o envio de e-mail no arquivo .env

   Se for em desenvolvimento crie uma conta no [mailtrap](https://mailtrap.io/) e configure as linhas.
     ```bash
     MAIL_USERNAME=null
     MAIL_PASSWORD=null
     ```

   Ou configuração completa de seu servidor de e-mail
     ```bash
     MAIL_DRIVER=smtp
     MAIL_HOST=smtp.mailtrap.io
     MAIL_PORT=2525
     MAIL_USERNAME=null
     MAIL_PASSWORD=null
     MAIL_ENCRYPTION=null
     ```

4. Para iniciar o servidor do laravel

   ```bash
   php artisan serve
   ```

   [http://localhost](http://localhost)

   > usuario: admin@example.com  
   > senha: admin

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

