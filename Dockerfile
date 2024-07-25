FROM agoenxz21/php56 

COPY . /var/www

RUN rm -rf docker-compose.yaml .github/ Dockerfile

RUN chown -R www-data:www-data /var/www

EXPOSE 80
