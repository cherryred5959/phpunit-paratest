.PHONY: start
start: erase build up ## clean current environment, recreate dependencies and spin up again

.PHONY: rebuild
rebuild: start ## same as start

.PHONY: erase
erase: ## stop and delete containers, clean volumes.
		docker-compose stop
		docker-compose rm -v -f

.PHONY: build
build: ## build environment and initialize composer and project dependencies
		docker-compose build

.PHONY: up
up: ## spin up environment
		docker-compose up -d

.PHONY: phpunit-functional-group
phpunit-functional-group: ## run phpunit testing
		docker-compose run php vendor/bin/phpunit --group functional

.PHONY: phpunit-classes-group
phpunit-classes-group: ## run phpunit testing
		docker-compose run php vendor/bin/phpunit --group classes

.PHONY: paratest-functional-group
paratest-functional-group: ## run paratest testing
		docker-compose run php vendor/bin/paratest -f -g functional

.PHONY: paratest-classes-group
paratest-classes-group: ## run paratest testing
		docker-compose run php vendor/bin/paratest  -g classes