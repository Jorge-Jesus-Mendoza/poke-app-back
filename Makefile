#!bin/bash

start: ## Start all containers
	docker compose up -d

stop: ## Stop all containers
	docker compose stop

restart: ## Restart all containers
	$(MAKE) stop && $(MAKE) start

build: ## Building project
	docker compose build

ssh: ## Into bash
	docker exec -ti php bash

new-project: ## Start New Project on Symfony
	docker exec -ti php symfony new project --no-git