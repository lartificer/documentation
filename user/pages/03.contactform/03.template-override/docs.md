---
title: Modifying the default template
taxonomy:
    category: docs
---

Most people will want to edit the blade template at some point. You can do this by simply publishing the template file:

    php artisan vendor:publish --provider="Lartificer\Contactform\ContactformServiceProvider" --tag="views"
    
>>>> Note that the command above will override any template you previously published.

You can now edit the template by modifying the files under /resources/views/vendor/contactform.

### Redirecting the user after form submission

To redirect the user after the mail has been sent, add the following input to the form:

    <input type="hidden" name="redirect" value="/path/to/redirect/to" />
    
