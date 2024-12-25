init: init-ci
init-ci: docker-down-clear \
	docker-pull docker-build docker-up \
	composer-install migrations

up: docker-up
down: docker-down
restart: down up
artisan: php-artisan
fix: cs-fix test analyze

docker-up:
	docker compose up -d

docker-down:
	docker compose down --remove-orphans

docker-down-clear:
	docker compose down -v --remove-orphans

docker-pull:
	docker compose pull

docker-build:
	docker compose build --pull

composer:
	docker compose run --rm tag-box-php-cli composer $(name)

php-artisan:
	docker compose run --rm tag-box-php-cli php artisan $(name)

composer-install:
	docker compose run --rm tag-box-php-cli composer install

migrations:
	docker compose run --rm tag-box-php-cli php artisan migrate

cs-fix:
	docker compose run --rm tag-box-php-cli composer php-cs-fixer fix

analyze:
	docker compose run --rm tag-box-php-cli composer analyze

test:
	docker compose run --rm tag-box-php-cli ./vendor/bin/phpunit --configuration phpunit.xml
