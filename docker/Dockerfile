MAINTAINER Po-Lin

FROM php:7.4.12-fpm-alpine

ENV TZ Asia/Taipei

RUN docker-php-ext-install opcache pdo_mysql

RUN apk update && \
    apk --no-cache add nginx supervisor tzdata

RUN rm -f /etc/nginx/conf.d/*

COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/php.conf /etc/nginx/conf.d/node.conf

COPY docker/supervisord.conf /etc/supervisord.conf

RUN mkdir /var/log/php-fpm

COPY docker/php.ini /usr/local/etc/php/php.ini
COPY docker/php-fpm.d/* /usr/local/etc/php-fpm.d/

COPY docker/opcache_info.php /var/www/html/

STOPSIGNAL SIGTERM

ENTRYPOINT []

WORKDIR /home/project

COPY . .

RUN chown -R nobody:nobody storage

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
