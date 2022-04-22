# laravelTools

simple artisan extend package for laravel,Create service,trait,Repositories,Presenters quickly

Laravel artisan 终端命令增强工具，增加了 Service、Trait、Repositories、Presenters 模版文件生成命令，支持Laravel 9。

## Directory Structure
![laravel path](./dst/WechatIMG6.jpeg)

## require
```$xslt
php > 7.0 || php > 9.0

laravel > 5.5 || laravel > 9.*
```

## install
```$xslt
composer require mengdodo/laravel-tools --dev
```

## how to use
create a new trait file  
```$xslt
php artisan make:trait Order
// Trait created successfully in app/Traits/OrderTrait.php
```

create a new service file  
```$xslt
php artisan make:service Mail
// service created successfully in app/Services/MailService.php
```

create a new repository file  
```$xslt
php artisan make:repo Product
// Trait created successfully in app/Repositories/ProductRepository.php
```

create a new presenter file  
```$xslt
php artisan make:presenter Category
// Trait created successfully in app/Presenters/CategoryPresenter.php
```
