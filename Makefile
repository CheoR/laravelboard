setup:
	@make build
build:
	docker compose up -d --build --force-recreate app
	docker compose run --rm composer create-project laravel/laravel .
down:
	docker compose down
stop:
	docker compose stop
up:
	docker compose up -d

