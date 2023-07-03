# Impostare un progetto con le CRUD :

1. Assicurarsi di aver creato il model della risorsa:

    php artisan make:model Comic ;

2. Inserire nel file "web.php" :

    Route::resource("comics", ComicController::class,) ;
    questo comando serve ad inserire le 7 rotte della CRUD;

    php artisan route:list ;
    per verificare le rotte create nel sito usare il comando (meglio darlo dopo aver creato anche il controller);

3. Creare il controller tipo resource per la risorsa :

    php artisan make:controller Guest/ComicController --resource --model=Comic ;

4. Si prende un metodo per volta e si completa ;
