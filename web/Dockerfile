FROM php:7.2-apache
MAINTAINER Mike Peters "mike@skylake.me"

COPY . /var/www/html/
EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
