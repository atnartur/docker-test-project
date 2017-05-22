FROM alpine:latest

RUN apk add --no-cache nodejs git

COPY ./docker/nginx /etc/nginx

WORKDIR /srv/www/app

COPY ./package.json .
RUN npm i -q

COPY . .

CMD /bin/true
