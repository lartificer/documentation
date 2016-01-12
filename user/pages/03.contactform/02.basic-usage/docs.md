---
title: Basic usage of the Lartificer Contactform
taxonomy:
    category: docs
---

After installing the contactform you already have a contactform on your website at the url http://yoursite.com/contact.

You can link the form in your application by using the translated link. This way your URL will be translated automatically:

    <a href="/{{ trans("contactform::links.contact") }}">Contact us</a>
    
Nothing more to do really. The contactform is now ready to use.