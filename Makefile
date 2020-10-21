exec:
	docker-compose exec php-fpm $$cmd

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down

docker-compose-build:
	docker-compose up --build -d

docker-build: docker-compose-build

bash:
	make exec cmd="bash"

composer-update:
	make exec cmd="composer update"

composer-install:
	make exec cmd="composer install"

npm-install:
	make exec cmd="npm install"

npm-prod:
	make exec cmd="npm run prod"

npm-watch:
	make exec cmd="npm run watch"

perm:
	sudo chown -R www-data:www-data .
	sudo chmod -R 775  .

log-nginx:
	docker logs --tail 50 -f nginx

cache:
	make exec cmd="php artisan ncfu:cache"

migrate:
	make exec cmd="php artisan migrate"