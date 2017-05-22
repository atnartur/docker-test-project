FROM alpine:latest

RUN apk add --no-cache nodejs git \
    php5 php5-phar php5-json php5-ctype php5-openssl

COPY ./package.json .
RUN npm i -q

WORKDIR /srv/www/app

COPY ./composer.phar /srv/www/app
COPY ./composer.json /srv/www/app

RUN php composer.phar install --no-interaction --ignore-platform-reqs -o

COPY ./docker/nginx /etc/nginx

COPY . .

CMD /bin/true
