FROM agoenxz21/php56 

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
