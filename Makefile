exec:
	docker-compose exec php-fpm $$cmd

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down

docker-build:
	docker-compose up --build -d

install2:
	echo https://ncfu.test:8080

install:
	cp ./.env.example ./.env
	cp ./webapp/.env.example ./webapp/.env
	make docker-up
	make composer-install
	make npm-install
	make npm-dev
	make exec cmd="php artisan storage:link"
	make exec cmd="php artisan key:generate"
	make migrate-fresh-seed
	sudo -- sh -c -e "echo '127.0.0.1  ncfu.test' >> /etc/hosts"
	echo 'https://ncfu.test:8080'

bash:
	make exec cmd="bash"

npm-dev:
	make exec cmd="npm run dev"

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

migrate-fresh:
	make exec cmd="php artisan migrate:fresh"

migrate-fresh-seed: migrate-fresh
	make exec cmd="php artisan db:seed"
