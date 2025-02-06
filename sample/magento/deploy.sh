#!/usr/bin/env sh

#-------------------------------------------------------------------------------
# Copyright (c) 2024 thaomaniac  <thaomaniac@gmail.com>
#-------------------------------------------------------------------------------

set -e

# Function to handle yes/no prompt
(
  # Check if the first argument is -y (auto continue)
  if [ "$1" = "-y" ]; then
    return 0
  fi
  title="Magento deployment!!!"
  printf "\033[1m\033[33m%s\033[0m \033[1mEnter 'yes'|'y' to continue:\033[0m " "$title"
  read -r input

  # Convert input to lowercase for comparison (POSIX-compliant way)
  input=$(echo "$input" | tr '[:upper:]' '[:lower:]')
  if [ "$input" != "y" ] && [ "$input" != "yes" ]; then
    echo "Canceled by user."
    exit 1
  fi
)
# END yes/no function

# Text formatting
bold=$(tput bold)
normal=$(tput sgr0)

echo "==================== ${bold}Start Deployment...${normal} ===================="

DEPLOY_MODE="production"

echo "========== Pull new code from git: git pull =========="
git pull

echo "========== Enable maintenance mode: bin/magento maintenance:enable =========="
bin/magento maintenance:enable

echo "========== Update with Composer: composer update =========="
composer update

#echo "Remove generated code & static files:"
#rm -rf var/cache/*
#rm -rf var/view_preprocessed/*
#rm -rf pub/static/*/*
#rm -rf generated/*/*

echo "========== Setup Upgrade: bin/magento setup:upgrade =========="
bin/magento setup:upgrade

echo "========== Set ${DEPLOY_MODE} mode: bin/magento deploy:mode:set ${DEPLOY_MODE} -s =========="
bin/magento deploy:mode:set "${DEPLOY_MODE}" -s

echo "========== Compile the code: bin/magento setup:di:compile =========="
bin/magento setup:di:compile

echo "========== Deploy static content: bin/magento setup:static-content:deploy =========="
bin/magento setup:static-content:deploy

echo "========== Clean the cache: bin/magento cache:clean =========="
bin/magento cache:clean

echo "========== Disable maintenance mode: bin/magento maintenance:disable =========="
bin/magento maintenance:disable

echo "==================== ${bold}Deployment complete!${normal} ===================="
