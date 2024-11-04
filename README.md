### With the help of Docker-compose deploy the ‘Wordpress’ and ‘Mysql’ container and access the front end of ‘Wordpress’

Use the provided docker-compose file.

Run it using: 

``` sudo docker-compose up -d ``` (detached mode)

Access Wordpress frontend on ``` localhost:8080 ``` (according to docker-compose config)

Stop the container:

``` docker-compose down ```

Delete volumes after use:

``` docker-compose down -v```
