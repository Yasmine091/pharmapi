## Guide d'installation
* Pour installer et configurer le site, fais ceci dans le terminal :
```
    git clone git@gitlab.com:Yasmine091/pharmapi.git
    cd pharmapi/
    cp .env.example .env
```
* Configure le fichier .env
* Fais l'installation des frameworks
* Puis reviens au terminal et fais ceci :
```
    composer install
    php bin/console doctrine:database:create
    php bin/console make:migration
    php bin/console doctrine:migrations:migrate
    symfony server:start
```

## Frameworks
* Symfony