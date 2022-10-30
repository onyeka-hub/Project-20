-- Custom Networks, Compose another Multicontainer Application - Part One --

We have started building another multi-container application in the hope of creating a private network setup between some of our services. This multi-container app will eventually have a postgresql, node.js, express.js, and php container.

So far, we have built the postgresql container. Note that we can set up database data by sending sql scripts to the /docker-entrypoint-initdb.d/ directory of the postgresql container.

STEP 1
First lets setup our db. We will be using postgres container.
In our new "compose-network" directory, create a docker-compose.yml file, and a folder for db. set up the db folder as above. Use the "docker compose up --build" whenever you want to rebuild any image or container.

To connect to the postgres database , exec into the container, run 'psql -U postgres postgres'
where postgres is default user and the second postgres is the name of the default database. You can run other command like 'SELECT * FROM apparel;

STEP 2
We will be adding two more containers to our biggest multi-container application. This time we added node.js, and flask containers to the project. Note that the flask container serves as an extension of the node.js container, adding more information to the core data being served.

The first node-express container will be used to serve our core data from the database. This will querry our db ,get the core data and serve it at the get-endpoint.
In our new "compose-network" directory create a folder for apparel. set up the apparel folder as above.

The second flask container will add a price tag to the items.

STEP 3
We have completed our backend containers, now we will add the frontend php container to make our site displyable on our browser.
We will also explore more customise network option for our docker compose application by setting up some private networks.

To start, in our root "compose-network" directory, create a folder for site. set up the site folder as above.

We dont want our site container to be able to be accessing our backend container. This is dangerous because any malicious person can through our site frontend can access our core backend container and cause serious problems. We will use networks to seperate the containers.

We will use docker compose to create two networks: core and site.
The core db , the apparel container will be connected to the core network network. The price container will be connected to both the core and the site network so that it can connect to both the core backend and also the frontend site con tainer. While the site container will be connected to the site network.

We have completed our biggest multi-container application yet, adding private networking to the set up as well. We just added the frontend php container, as well as a system of privilege for our services based on what network they attached to. This allows us to make sure the frontend site container that we want to expose to the public does not have a way to connect to our core services. After all, with a way for the public to access the core, who knows what dangerous scripts and behavior they could send to our central systems.

Here’s the completed project code. 
https://github.com/onyeka-hub/Project-20/tree/main/docker-practice
