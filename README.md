### With the help of Docker-compose deploy the ‘Wordpress’ and ‘Mysql’ container and access the front end of ‘Wordpress’

Use the provided docker-compose file.

Run it using: 

```sudo docker-compose up -d``` (detached mode)

Access Wordpress frontend on ```localhost:8080``` (according to docker-compose config)

Stop the container:

```docker-compose down ```

Delete volumes after use:

```docker-compose down -v```

---
### Pull the LAMP Stack container from docker hub and host a web application of your own. Push that image back to repository. Make use of database.

Container: ```https://hub.docker.com/r/mattrayner/lamp```

Run it, then enter it using:

```docker exec -it <container-id> /bin/bash```

In the ``` /var/www/html/ ``` directory, add files for hosting.

As an example, use the index.php and db.php files for the Notes app.

Connect to MySQL:

```mysql -u root -p```

MySQL configuration:

```
CREATE DATABASE notes;
USE notes;

CREATE TABLE entries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
