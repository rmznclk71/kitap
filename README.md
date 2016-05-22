Kurulum
------------
Ekle

```
"rmznclk71/kitap": "*"
```

Tabloları Oluşturma
```sh
yii migrate --migrationPath=vendor/rmznclk71/kitap/migrations
```

Ayarlamalar

Module Ayarı:

```php
'modules' => [
        'kitap' => [
            'class' => 'rmznclk71\kitap\Module',
        ],
	],
```

RBAC Ayarı :
```php
'authManager' => [
    		'class' => 'yii\rbac\DbManager',
    		'defaultRoles' => ['guest'],
    	],
```



