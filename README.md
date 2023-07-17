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
