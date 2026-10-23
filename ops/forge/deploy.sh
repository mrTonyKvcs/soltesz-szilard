set -eu

$CREATE_RELEASE()

cd "$FORGE_RELEASE_DIRECTORY"

$FORGE_COMPOSER install --no-dev --no-interaction --prefer-dist --optimize-autoloader
npm ci --include=dev
npm run build

$FORGE_PHP artisan migrate --force --no-interaction
$FORGE_PHP artisan storage:link --force --relative
$FORGE_PHP artisan config:cache
$FORGE_PHP artisan route:trans:cache
$FORGE_PHP artisan view:cache

$ACTIVATE_RELEASE()

$RESTART_QUEUES()
