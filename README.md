# Docker Multiple Magento 2

## Compose configuration

#### Create the .env file

```sh
cp sample/env .env 
```

Edit the .env file information if necessary

### compose.override.yml file

Create compose.override.yml file if necessary to override the main compose.yaml file

```sh
cp sample/docker-compose.override.yml docker-compose.override.yml 
```

## PHP Project customization

#### Map php service to project

```sh
cp sample/php-map .php-map 
```

Edit .php-map with format: `<project>:<php_service>`

Ex.:

```
magento1:php74
magento2:php81
````

## Magento configuration

See sample `env.php` file: [env.php](sample/magento/env.php)

### Configure Redis

Reference: [Use Redis for default cache](https://experienceleague.adobe.com/en/docs/commerce-operations/configuration-guide/cache/redis/redis-pg-cache#example-command)  
Example command

```sh
bin/magento setup:config:set --cache-backend=redis --cache-backend-redis-server=redis --cache-backend-redis-db=0
```

### Configure RabbitMQ

Reference: [Message broker: Configure RabbitMQ](https://experienceleague.adobe.com/en/docs/commerce-operations/installation-guide/prerequisites/rabbitmq#configure-rabbitmq)  
Example command

```sh
bin/magento setup:config:set --amqp-host="rabbitmq" --amqp-port="5672" --amqp-user="admin" --amqp-password="admin" --amqp-virtualhost="/"
```
