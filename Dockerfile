FROM agoenxz21/php56 

COPY . /var/www

RUN rm -rf docker-compose.yaml .github/ Dockerfile

EXPOSE 80
