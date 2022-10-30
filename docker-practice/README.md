-- Build a File Server Image --

We build our first Docker image with a custom Dockerfile. This image used serve.js, a node.js module used to serve file directories, and static html pages. Below are the steps we used to create the serve image.

- Create a `serve` directory with an inner `display` directory.
- Place contents to be served into the `display` directory.
- Create a Dockerfile at the root of the project with the following content as shown in the docker-practice directory
- Build the image: `docker build . -t docker/serve`
- Run a container with the image, and map the host’s 3001 port to the container’s 3000 port: 
`docker run --name=serve -p=3001:3000 docker/serve`
- visit http://localhost:3001 in a browser.



-- Build an express.js Image --

We built a new image, using express.js to build a containerized web server.
After reating the "express" repository, build and run the container, and view it:
- `docker build . -t docker/express`
- `docker run --name=express -d -p 3002:80 docker/express`
- Go to http://localhost:3002

While building the express container, we covered a few important concepts. Here are some extra notes:
- In order to make the container accessible, we hosted it on ‘0.0.0.0’, allow external connections.
- We also used the recommended exec form for the CMD option of the Dockerfile:
	CMD [“node”, “server.js”]



-- Build a PHP Image --

In this project, we built a php Docker image.
We also learn about the importance of the `EXPOSE 80` line in the Dockerfile.
Although this doesn’t actually publish the container’s port, it’s still a very useful line.
It allows developers to look at the Dockerfile as documentation and understand exactly what ports need to be exposed to work properly. It actually tells the port at which the container listens for connection and not the host machine.

The completed project is at the end of this note.
After cloning the project, build and run the container:
- $ docker build . -t docker/php
- $ docker run --name=php -p=3003:80 docker/php
- Visit http://localhost:3003



-- Build a Python Flask Image --

In this video, we build a Python Flask Image.
We also saw how the `WORKDIR` option in the Dockerfile can allow us to set a working directory for the container.
This ensures that following commands like `COPY` or `CMD` are set in the context of that working directory.

The completed project is at the end of this note.
After cloning the project, build and run the container:
- $ docker build . -t docker/flask
- $ docker run --name=flask -p=3004:80 docker/flask

-- Compose a Two-Container App - Part One --

We started building our first multi-container application with Docker Compose, with a node container first of all, and soon, a php container. In this project, we set up the Node side of the project. We also created a docker-compose.yml file in order to configure the project.

Note that we haven’t done the php portion of the project yet, which we’ll go through in the next project:

After completeing the files: Docker-compose.yml, server.js, package.json and Dockerfile

Docker-compose.yml file
version: '3'

services:
  players:
    build: ./players
    ports:
      - 5002:80

server.js file
const express = require('express');
const app = express();
const HOST = '0.0.0.0';
const PORT = 80;

app.get('/', (req, res) => {
    res.json({
        players: ['onyeka', 'nneoma', 'nonso', 'ifeakandu', 'chinasa']
    });
});

app.listen(PORT, HOST);
console.log(`Running on http://${HOST}:${PORT}`);

package.json file
{
    "dependencies": {
        "express": "^4.16.1"
    }
}

Dockerfile
# Specify a base image
FROM node

#Install some dependencies
WORKDIR /usr/package.json
COPY package.json package.json
RUN npm install
COPY . .

EXPOSE 80

# Set up a default command
CMD ["node", "server.js"]


Go to the command line and because we want to use the docker compose, do

docker compose --help

docker compose up


-- Compose a Two-Container App - Part Two --

We completed our first multi-container application with Docker Compose. After building the node container first, we added the php container next.

The completed project is at the end of this note.

From the given github repo
Create a directory call 'site' in the root node-php directory

Create two files in this directory: index.php and Dockerfile

index.php
<html>
  <body>
    <h1>Team names:</h1>
    <ul>
      <?php
        foreach(json_decode(file_get_contents('http://players'))->players as $player) {
          echo "<li>$player</li>";
        }
      ?>
    </ul>
  </body>
</html>

Dockerfile
FROM php
COPY index.php .
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80"]

Update the Docker-compose.yml with under the ports section
site:
    build: ./site
    ports:
      - 5000:80
    depends_on:
      - players

After cloning the project, run:
`docker-compose up`

If you need to update an image, launch docker-compose using the `--build` option:
`docker-compose up --build`



The completed project is at this repo:

https://github.com/onyeka-hub/Project-20/tree/main/docker-practice