FROM php:8.2.1-fpm-alpine3.17
MAINTAINER zhangfish
RUN set -eux && \
    sed -i 's/dl-cdn.alpinelinux.org/mirrors.ustc.edu.cn/g' /etc/apk/repositories && \
    apk update && \
    docker-php-ext-install pdo_mysql && \
    echo "output_buffering = 4096" > /usr/local/etc/php/conf.d/php.ini
