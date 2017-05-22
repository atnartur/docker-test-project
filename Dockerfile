FROM node:6

WORKDIR /app

COPY package.json .

RUN npm i -q

COPY . .

EXPOSE 3000

CMD ["node", "app"]