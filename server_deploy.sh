#!/bin/sh

echo "Inicio do Deploy da Aplicação ..."

# Enter maintenance mode
docker exec -i laradock_workspace_1 /bin/bash -c "cd cod1green && php artisan down"

# Checkout
docker exec -i laradock_workspace_1 /bin/bash -c "cd cod1green && git checkout deploy --force"

# Update codebase
docker exec -i laradock_workspace_1 /bin/bash -c "cd cod1green && git fetch origin deploy"
docker exec -i laradock_workspace_1 /bin/bash -c "cd cod1green && git reset --hard origin/deploy"

# Install dependencies based on lock file
docker exec -i laradock_workspace_1 /bin/bash -c "cd cod1green && composer install --no-interaction --prefer-dist --optimize-autoloader"

# Migrate database
docker exec -i laradock_workspace_1 /bin/bash -c "cd cod1green && php artisan migrate --force"

# Clear cache
docker exec -i laradock_workspace_1 /bin/bash -c "cd cod1green && php artisan optimize"

# Reload PHP to update opcache
# echo "" | sudo -S service php7.4-fpm reload

# Exit maintenance mode
docker exec -i laradock_workspace_1 /bin/bash -c "cd cod1green && php artisan up"

echo "Fim do Deploy da Aplicação!"
