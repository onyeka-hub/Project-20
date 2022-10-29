FROM node
WORKDIR /app
COPY package.json package.json
RUN npm install
COPY ./app ./app
EXPOSE 80
CMD ["node", "app/server.js"]