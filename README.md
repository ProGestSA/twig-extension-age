# twig-extension-age
Twig extension to calculate age from date

Installation:
```php
# $twig being your Twig_Environment object
$twig->addExtension(new \ProGest\Twig\AgeExtension());
```

Usage:
```
# Pass the date to the age filter
{{ user.birthdate | age }}
```