DOCKER_COMPOSE=docker-compose
PHP_SERVICE=php
NGINX_SERVICE=nginx
ELK_SERVICE=elk
DB_SERVICE=db
DOCKER_EXEC=$(DOCKER_COMPOSE) exec
ZSHELL=zsh
SHELL=sh

.PHONY: install build start start-detached stop stop-delete run-php run-nginx run-db run-elk

install: build start-detached
build: 
	$(DOCKER_COMPOSE) build	
start: 
	$(DOCKER_COMPOSE) up
startd: 
	$(DOCKER_COMPOSE) up -d
stop: 
	$(DOCKER_COMPOSE) stop
remove: 
	$(DOCKER_COMPOSE) down

run-php: 
	$(DOCKER_EXEC) $(PHP_SERVICE) $(ZSHELL)
run-nginx: 
	$(DOCKER_EXEC) $(NGINX_SERVICE) $(SHELL)
run-db: 
	$(DOCKER_EXEC) $(DB_SERVICE) $(SHELL)
run-elk: 
	$(DOCKER_EXEC) $(ELK_SERVICE) $(SHELL)