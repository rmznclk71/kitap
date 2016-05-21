Installation
------------
Add

```
"alperkantarci/post": "*"
```

to the require section of your `composer.json` file.
And update your composer
```
composer update
```


Apply migrations
```sh
yii migrate --migrationPath=vendor/alperkantarci/post/migrations
```

Configuration:

Module configuration:

```php
'modules' => [
        'post' => [
            'class' => 'alperkantarci\post\Module',
        ],
	],
```

RBAC configuration :
```php
'authManager' => [
    		'class' => 'yii\rbac\DbManager',
    		'defaultRoles' => ['guest'],
    	],
```

Uygulanmis olan Authentication kurallari
------------
Migrationlar kullanilarak olusturulan auth tablolarinda "admin" ve "user" diye iki authentication kurali hazir insert edilmistir ve bu kurallar user_id = 1 ve user_id = 2 olan kullanicilara atanmistir. Veritabaninizda "1" id ye sahip user "admin" olarak, "2" id ye sahip user de "user" olarak atanmistir.

Usage
------------

Post module Homepage'e ulasabilmek icin:
```
http://___[Your_Domain]___/post
```

Hicbir sekilde login olmayan yani guest (misafirlere) module homepage'e girdikten sonra sadece "Show Posts" buttonu goruntulenmektedir. Bunun yardimiyla misafirler de tum postlari giris yapmadan gorebilmektedir.

"user" auth kuralina sahip olan kullanicilar giris yapip module homepage'e girerse kullanici oldugu icin yine sadece "Show Posts" buttonu goruntulenmektedir. Misafirden farkli olarak bu kullanici tum postlari goruntuleyebilir, ama sadece kendi postlarina update ve delete islemlerini uygulayabilmektedir.

"admin" auth kuralina sahip olan kullanicilar ise module homepage'e girerse admin oldugu icin "Category Manager", "Type Manager", "Posts Manager" isimli 3 farkli button goruntulenmektedir. Bu buttonlar yardimiyla admin Category, Type ve Post'lara listeleme,insert,update,delete islemlerini uygulayabilmektedir.

Screenshots
------------

Post Module without login :
<img src="http://s32.postimg.org/ctx05id6t/post_home_page_without_login.png">

<img src="http://s32.postimg.org/bj5ty1rut/post_grid_without_login.png">

Post Module with user login :

<img src="http://s32.postimg.org/f4f4k5kn9/post_home_page_with_login.png">

<img src="http://s32.postimg.org/fo7n9ibwl/post_grid_with_login.png">

Post Module with admin login :

<img src="http://s32.postimg.org/6gxsbrydh/post_home_page_with_admin_login.png">

<img src="http://s32.postimg.org/mlxza85vp/post_category_manager_with_admin_login.png">

<img src="http://s32.postimg.org/3xyrp8pfp/post_type_manager_with_admin_login.png">

<img src="http://s32.postimg.org/ggojxb16t/post_post_manager_with_admin_login.png">

