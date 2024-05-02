up:
	docker-compose up -d
down:
	docker-compose down
cli:
	docker-compose exec php-cli bash
npm-build:
	docker-compose exec node npm run build
npm-dev:
	docker-compose exec node npm run dev
npm-install:
	docker-compose exec node npm install
tinker:
	docker-compose exec -u 0 php-cli artisan tinker
migrate:
	docker-compose run artisan migrate
artisan:
	docker-compose run artisan
ps:
	docker-compose ps
refresh:
	docker-compose run artisan migrate:refresh
