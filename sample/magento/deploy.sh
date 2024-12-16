#!/usr/bin/env sh

set -e

# Text formatting
bold=$(tput bold)
normal=$(tput sgr0)

echo "========== ${bold}Start Deployment...${normal} =========="

DEPLOY_MODE="production"

echo "===== Pull new code from git: ====="
git pull

echo "===== Enable maintenance mode: ====="
bin/magento maintenance:enable

echo "===== Update with Composer: ====="
composer update

#echo "To remove generated code & static files:"
#rm -rf var/cache/*
#rm -rf var/view_preprocessed/*
#rm -rf pub/static/*/*
#rm -rf generated/*/*

echo "===== Setup Upgrade: ====="
bin/magento setup:upgrade

echo "===== Set ${DEPLOY_MODE} mode (-s): ====="
bin/magento deploy:mode:set "${DEPLOY_MODE}" -s

echo "===== Compile the code: ====="
bin/magento setup:di:compile

echo "===== Deploy static content: ====="
bin/magento setup:static-content:deploy

echo "===== Clean the cache: ====="
bin/magento cache:clean

echo "===== Disable maintenance mode: ====="
bin/magento maintenance:disable

echo "========== ${bold}Deployment complete!${normal} =========="
