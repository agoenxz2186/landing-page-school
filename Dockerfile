FROM agoenxz21/php56 

WORKDIR /var/www/html
COPY . /var/www/html

RUN rm -rf docker-compose.yaml .github/ Dockerfile

EXPOSE 80
