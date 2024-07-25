FROM agoenxz21/php56 

WORKDIR /var/www/html
COPY . /var/www/html

RUN rm -rf docker-compose.yaml .github/ Dockerfile sekolah.sql

RUN mkdir -p /var/www/html/application/cache/sessions
RUN chmod 0777 /var/www/html/application/cache/sessions

EXPOSE 80
