#!/usr/bin/env sh

set -e

DEPLOY_MODE="production"

echo "Pull new code from git:"
git pull

echo "Enable maintenance mode:"
bin/magento maintenance:enable

echo "Update components with Composer:"
composer update

echo "Set application mode: "
php8.1 bin/magento deploy:mode:set "${DEPLOY_MODE}" -s

echo "To remove generated code & static files:"
rm -rf var/view_preprocessed/*
rm -rf pub/static/*/*
rm -rf generated/*/*

echo "Update the database schema & data:"
bin/magento setup:upgrade

echo "Compile the code:"
bin/magento setup:di:compile

echo "Deploy static content:"
bin/magento setup:static-content:deploy

echo "Clean the cache:"
bin/magento cache:clean

echo "Disable maintenance mode:"
bin/magento maintenance:enable
