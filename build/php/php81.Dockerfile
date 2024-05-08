FROM php:8.1-fpm

LABEL authors="thaomaniac"
ARG PHP_INI_FILE=php.ini-development

# php.ini file
RUN mv "$PHP_INI_DIR/$PHP_INI_FILE" "$PHP_INI_DIR/php.ini"

# Install additional packages
RUN apt-get update && apt-get install -y \
		libfreetype-dev \
		libjpeg62-turbo-dev \
		libpng-dev \
        libfreetype6-dev \
        libicu-dev \
        libjpeg-dev \
        libxml2-dev \
        libxslt-dev \
        libzip-dev \
        openssl \
        curl \
        git \
        unzip \
        zip \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \
#    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
	&& docker-php-ext-install -j$(nproc) gd pdo_mysql bcmath intl pdo_mysql soap xsl sockets zip
# xdebug
RUN pecl install xdebug
#RUN docker-php-ext-enable xdebug

# composer
RUN curl https://getcomposer.org/download/2.1.12/composer.phar --output /usr/bin/composer && chmod +x /usr/bin/composer
RUN curl https://files.magerun.net/n98-magerun2.phar --output /usr/bin/n98-magerun2.phar && chmod +x /usr/bin/n98-magerun2.phar

#mhsendmail formailhog
RUN curl -L https://github.com/mailhog/mhsendmail/releases/download/v0.2.0/mhsendmail_linux_amd64 --output /usr/local/bin/mhsendmail \
	&& chmod +x /usr/local/bin/mhsendmail
# Create user magento
#RUN useradd -m -s /bin/bash magento && usermod -a -G www-data magento

# Give permision
#RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 777 /var/www
RUN usermod -u 1000 www-data
