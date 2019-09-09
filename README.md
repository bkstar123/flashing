# bkstar123/flashing

> A lightweight package to send flash messages in Laravel applications. This package only supports one single flash message at a time, and the flash message is displayed in the format of a toast notification  

## 1. Installation

    composer require bkstar123/flashing

After that, you need to publish the package's assets:  
```php artisan vendor:publish --provider="Bkstar123\Flashing\FlashingServiceProvider"```  

It will copy a blade view element to your application's ```resources/views/vendor/bkstar123_flashing/flashing.blade.php```. You are free to customize this view element. Also, it will copy the package's javascript files to your application's```public/js/vendor/bkstar123)handling/*.js```

## 2. Usage

**a) In view**

In view or master layout, just include the package's view element with ```@include('bkstar123_flashing::flashing')```  

**b) In controller methods**

Out of the box, the package provides you with the following toolset for flashing a message:  
- ```Bkstar123\Flashing\Facades\Flashing``` Facade. Alternatively, you can use its alias ```Flashing```  
- ```flashing()``` helper function  

The package supports the following types of flashing messages:  
- ***success***    
- ***error***  
- ***warning***  
- ***info*** (default)  

**Example**:  
```php
<?php
// Flash a info-typed message by default
\Flashing::message('Welcome to the home page')
    ->flash();
flashing('Welcome to the home page')
    ->flash();

// Flash a success-typed message
\Flashing::message('Welcome to the home page')
    ->success()
    ->flash();
flashing('Welcome to the home page')
    ->success()
    ->flash();

// Flash a message and mark it as important i.e it will not disappear until being dismissed by yourself
\Flashing::message('Important message')
    ->important()
    ->flash();
flashing('Important message')
    ->important()
    ->flash();

// Specify the miliseconds for timing out the flash message
// The given timeout will be ignored if you mark the flash message as important
\Flashing::message('This message will disappear after 3 seconds')
    ->timeout(3000)
    ->flash();
flashing('This message will disappear after 3 seconds')
    ->timeout(3000)
    ->flash();

// Specify the location of the flash message, it can be either top-right or bottom-right
\Flashing::message('I will be on the top-right of your screen')
    ->position('top')
    ->flash();
flashing('I will be on the top-right of your screen')
    ->position('top')
    ->flash();
```  

All methods ```success() | error() | warning() | info()``` can be chained after ```message()``` as well as chained by ```important(), timeout() & position()```. In the final, you must always append ```flash()``` to the chain.  

**Note**: ```flashing('hello world')``` <=> ```\Flashing::message('hello world')```
