# Docker Multiple Magento 2

## Magento configuration

### Configure Redis

Reference: [Use Redis for default cache][1]

Example command

```sh
bin/magento setup:config:set --cache-backend=redis --cache-backend-redis-server=redis --cache-backend-redis-db=0
```

### Configure RabbitMQ

Reference: [Message broker: Configure RabbitMQ][2]

Example command

```sh
bin/magento setup:config:set --amqp-host="rabbitmq" --amqp-port="5672" --amqp-user="admin" --amqp-password="admin" --amqp-virtualhost="/"
```

[1]: https://experienceleague.adobe.com/en/docs/commerce-operations/configuration-guide/cache/redis/redis-pg-cache#example-command

[2]: https://experienceleague.adobe.com/en/docs/commerce-operations/installation-guide/prerequisites/rabbitmq#configure-rabbitmq
