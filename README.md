# Cafedelaplaca
Online static site cafe de la placa de el Mario

## Production Environment
+ online: www.cafedelaplazalh.com

## How to enable PHP log (linux redhat, fedora, centos)
Edit this in ```php.ini```:
```
error_reporting = E_ALL;& ~E_DEPRECATED & ~E_STRICT
display_errors = On;Off
```
Restart it
```
systemctl restart httpd.service;systemctl restart php-fpm.service;
```
Default Fedora33 log file locations:
```
tail -F /var/log/httpd/*
tail -F /var/log/php-fpm/www-error.log
```

## Useful links

+ https://bootstrapmade.com/restaurantly-restaurant-template/
