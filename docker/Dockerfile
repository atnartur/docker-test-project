FROM alpine:latest

RUN apk add --no-cache nodejs git

COPY ./package.json .
RUN npm i -q

COPY ./docker/nginx /etc/nginx

WORKDIR /srv/www/app

COPY . .

CMD /bin/true
