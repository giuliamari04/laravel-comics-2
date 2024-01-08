<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## installazione Laravel

- crea cartella progetto e entra nel progetto da terminale

- apri il link 
```bash
cd your parent folder path

composer create-project --prefer-dist laravel/laravel:^9.2 your_project_name_here

cd your project_name

code . -r 

php artisan serve

ctrl + c 
```
## Configurazione Laravel 
``` bash
composer require pacificdev/laravel_9_preset

php artisan preset:ui bootstrap

npm install

npm install --save @fortawesome/fontawesome-free
```

aggiungi a vite.config.js dopo quello di bootstrap

```bash
'~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),
```
copio la cartella del webfont in node_modules e la incollo in resources

volendo creo cartella img in resources

in app.scss aggiungo: 
```bash
$fa-font-path: "../fonts/font-awesome" !default;

@import "~@fortawesome/fontawesome-free/scss/fontawesome";
@import "~@fortawesome/fontawesome-free/scss/regular";
@import "~@fortawesome/fontawesome-free/scss/solid";
@import "~@fortawesome/fontawesome-free/scss/brands";
```

creo cartella partials in resources>scss>partials>_variables.scss

creo nuova repo su github con template

clono la repo su vs

apro terminale 
```bash
composer install
```
copia file .env.example e rinomina con .env
```bash
php artisan key:generate
npm install
```
## consegna esercizio 

Create un nuovo progetto Laravel. Concentratevi sul layout: create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.

Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass.

Bonus:
Create più pagine istituzionali che condividono lo stesso layout (utilizzando il routing)

Terminate l'esercizio di ieri aggiungendo la rotta e il template per il dettaglio del fumetto
Bonus:
Create le rotte le pagine (index e show) per un'altra entità a vostro piacere
