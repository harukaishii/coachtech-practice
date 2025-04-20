FROM php:7.4.9-fpm

COPY ./docker/php/php.ini /usr/local/etc/php/

RUN apt update

WORKDIR /var/www

# ホストからソースコードをコピー (サブディレクトリの内容をコピー)
COPY ./src/php01 /var/www/

# ファイルとディレクトリの所有者を www-data に変更し、適切な権限を設定
RUN chown -R www-data:www-data /var/www/
RUN chmod -R 755 /var/www/