---
title: Installing the Lartificer Contactform
taxonomy:
    category: docs
---

Make sure you run Laravel >= 5.0, then execute:

    composer require lartificer/contactform
    
Add the Service Provider to your app.php's providers array:

    'providers' => [
    
        ...
    
        /*
         * Lartificer
         */ 
        'Lartificer\Contactform\ContactformServiceProvider',
    
    ],
    
    
You now need to publish the config file to enter the email address which should receive the emails:

    php artisan vendor:publish --provider="Lartificer\Contactform\ContactformServiceProvider" --tag="config"
    
Now edit the newly created file (/config/lartificer/contactform.php).
    
You are done. Continue with the [basic usage](../02.basic-usage/docs.md).