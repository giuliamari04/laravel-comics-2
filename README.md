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

##creare condroller per modifiche dati
```bash
 php artisan make:controller ComicController --resource
 ```
mostra liste di route
```bash
 php artisan route:list --except-vendor  
 ```
crea model seeder migration
```bash
 php artisan make:model Comic -rcms
 ```
 creo rotte
 ```bash
Route::resource('comics', ComicController::class);
 ```
creo form request per validazione 
 ```bash
php artisan make:request StoreModelRequest
 ```
## consegna esercizio 

Milestone 1
Tramite gli appositi comandi artisan create un model con relativa migration e seeder e resource controller.
Editate la resource route
Milestone 2
Iniziate a definire le prime operazioni CRUD con le relative view dove necessarie:
- index()
- show()
- create()
- store() (solo dump dei dati)
Bonus:
Procedere con il salvataggio dei dati sul db

Milestone 3
oggi lavorate sulla stessa repo di ieri e completate le operazioni CRUD.
Bonus:
Aggiungere validazioni e messaggi di errore e alla cancellazione messaggio di conferma all'utente

Ciao ragazzi,
sempre lavorando sulla repo di ieri, potete aggiungere le validazioni in modo da rendere più stabile il vostro gestionale di fumetti. Validare gli input ricevuti in fase di creazione e modifica, rispondendo con errori chiari e in italiano.
Bonus:
utilizzare le Request personalizzate per validare i dati
aggiungere conferma alla cancellazione degli elementi
aggiungere un filtro a vostra scelta per i dati dei comics
