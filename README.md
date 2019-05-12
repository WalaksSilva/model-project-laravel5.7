<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Projeto em Laravel 5.7 com autenticação de API e CORS configurados.

O projeto já está configurado com [tymondesigns/jwt-auth](https://github.com/tymondesigns/jwt-auth/wiki/Installation) e [barryvdh/laravel-cors](https://github.com/barryvdh/laravel-cors/blob/master/readme.md). 
O Laravel utiliza o Composer para gerenciar suas dependências. Então, antes de usar o Laravel, certifique-se de ter o Composer instalado em sua máquina. 
Após clonar o projeto execute o seguinte comando para instalar todos os pacotes do Laravel. 

```ruby
    composer install 
```

Vá na arquivo .env e configure o acesso ao banco de dados

```
    DB_CONNECTION=mysql 
    DB_HOST=127.0.0.1 
    DB_PORT=3306 
    DB_DATABASE=model-project 
    DB_USERNAME=root 
    DB_PASSWORD=root 
```
 

Já existe duas tabelas users e perfils pra exemplificar a criação de tabela. Execute o seguinte comando para criar as tabelas no banco e criar um usuário inicial para testar o login. 
Os dados de seed está na pasta seeds em database. 

```ruby
`php artisan migrate –seed 
```

As seguintes rotas estão configuras: 

```
- /api/auth/login (Login) 
- /api/auth/refresh (Refresh token) 
- /api/auth/me (Recuperar dados do usuário logado) 
```
