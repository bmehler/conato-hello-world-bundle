# A Contao Hello World Bundle for CMS Contao 

```php
mkdir contao-hello-world-bundle
cd contao-hello-world-bundle

composer init
```

Folgende Daten werden in die composer.json geschrieben:

```php
{
    "name": "bmehler/contao-hello-world-bundle",
    "description": "A hello world bundle for CMS Contao",
    "type": "contao-bundle",
    "require": {
         "contao/core-bundle": "^4.13"
    },
    "extra": {
         "contao-manager-plugin": "Bmehler\\ContaoHelloWorldBundle\\ContaoManager\\Plugin"
    },
    "license": "LGPL-3.0-or-later",
    "autoload": {
        "psr-4": {
            "Bmehler\\ContaoHelloWorldBundle\\": "src/"
        }
    },
    "authors": [
        {
            "name": "Bernhard Mehler"
        }
    ]
}
```

Danach können folgende Dateien angelegt werden. Siehe Dokumentation https://docs.contao.org/dev/getting-started/extension/

```php
src/ContaoHelloWorldBundle.php
src/ContaoManager/Plugin
```

Nun können wir die composer.json unsere Contao Installation erweitern und mit Hilfe des composers updaten.
Die Composer.json sieht wie folgt aus:

```php
{
    "name": "contao/managed-edition",
    "description": "Contao Managed Edition",
    "license": "LGPL-3.0-or-later",
    "type": "project",
    "require": {
        "contao/calendar-bundle": "^4.13",
        "contao/comments-bundle": "^4.13",
        "contao/conflicts": "@dev",
        "contao/faq-bundle": "^4.13",
        "contao/listing-bundle": "^4.13",
        "contao/manager-bundle": "4.13.*",
        "contao/news-bundle": "^4.13",
        "contao/newsletter-bundle": "^4.13",
        "bmehler/contao-hello-world-bundle": "dev-main"
    },
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/bmehler/contao-hello-world-bundle.git"
        }
    ],
    "conflict": {
        "contao-components/installer": "<1.3"
    },
    "config": {
        "allow-plugins": {
            "composer/package-versions-deprecated": true,
            "contao-community-alliance/composer-plugin": true,
            "contao-components/installer": true,
            "contao/manager-plugin": true,
            "php-http/discovery": false
        },
        "preferred-install": {
            "bmehler/*": "source",
            "*": "dist"
        }
    },
    "extra": {
        "contao-component-dir": "assets"
    },
    "scripts": {
        "post-install-cmd": [
            "@php vendor/bin/contao-setup"
        ],
        "post-update-cmd": [
            "@php vendor/bin/contao-setup"
        ]
    }
}

```
Nun geht man in das Verzeichnis der Contao Installation.
Bei mir ist das:

```php
cd /Applications/MAMP/htdocs/contao-tutorial
```

Nun holen wir uns das Hello World Bundle in die Contao Installation:
```php
composer update
```
Danach kann man überprüfen, ob die Datenbankeinträge aktuell sind:
```php
php vendor/bin/contao-console contao:migrate --dry-run
```
