# =========================
# Podman Compose Shortcuts
# =========================

# Default compose file name
COMPOSE=podman-compose

# Container names (sesuaikan dengan compose.yaml kamu)
APP=prattfolio_app
WEB=prattfolio_web
DB=prattfolio_db

# Default DB creds (sesuaikan)
DB_NAME=prattfolio_db
DB_USER=pratt

# -------------------------
# Helpers
# -------------------------
.PHONY: help ps up down rebuild restart logs sh websh db redis mailpit \
        artisan composer npm key migrate seed fresh cache-clear perm fix \
        db-root db-app db-export db-import port status prune url

help: ## Show available commands
	@echo ""
	@echo "Podman Compose Makefile Shortcuts"
	@echo "--------------------------------"
	@grep -E '^[a-zA-Z_-]+:.*##' Makefile | awk 'BEGIN {FS = ":.*##"}; {printf "  \033[36m%-18s\033[0m %s\n", $$1, $$2}'
	@echo ""

url: ## Show project URL (http://localhost:<port>)
	@PORT=$$(podman port $(WEB) 80/tcp 2>/dev/null | head -n 1 | sed -E 's/.*:([0-9]+)$$/\1/'); \
	if [ -z "$$PORT" ]; then \
		echo "Web container not running or no port published."; \
		echo "Try: make up"; \
		exit 1; \
	fi; \
	echo "URL: http://localhost:$$PORT"


ps: ## Show running containers
	podman ps

status: ## Show status containers (including stopped)
	podman ps -a

up: ## Start project containers
	$(COMPOSE) up -d

rebuild: ## Start containers + rebuild images
	$(COMPOSE) up -d --build

down: ## Stop project containers (keeps volumes/db)
	$(COMPOSE) down

restart: ## Restart project containers
	$(COMPOSE) down
	$(COMPOSE) up -d

logs: ## Tail logs all services
	$(COMPOSE) logs -f --tail=200

logdb: ## Tail logs db
	podman logs -f --tail=200 $(DB)

sh: ## Shell into app container
	podman exec -it $(APP) sh

websh: ## Shell into web container
	podman exec -it $(WEB) sh

dbsh: ## Shell into db container
	podman exec -it $(DB) sh

artisan: ## Run artisan, ex: make artisan cmd="migrate"
	@if [ -z "$(cmd)" ]; then \
		echo "Usage: make artisan cmd=\"migrate\""; exit 1; \
	fi
	podman exec -it $(APP) php artisan $(cmd)

composer: ## Run composer, ex: make composer cmd="install"
	@if [ -z "$(cmd)" ]; then \
		echo "Usage: make composer cmd=\"install\""; exit 1; \
	fi
	podman exec -it $(APP) composer $(cmd)

key: ## Generate APP_KEY
	podman exec -it $(APP) php artisan key:generate

migrate: ## Run migrations
	podman exec -it $(APP) php artisan migrate

seed: ## Run seeders
	podman exec -it $(APP) php artisan db:seed

fresh: ## Fresh migrate + seed (DANGER: drops tables)
	podman exec -it $(APP) php artisan migrate:fresh --seed

cache-clear: ## Clear Laravel caches
	podman exec -it $(APP) php artisan optimize:clear

perm-fix: ## Fix permissions for storage and cache
	podman exec -it $(APP) sh -lc "chmod -R 775 storage bootstrap/cache || true"

db: ## Open mysql client using app user
	podman exec -it $(DB) mysql -u $(DB_USER) -p $(DB_NAME)

db-root: ## Open mysql client as root
	podman exec -it $(DB) mysql -u root -p

db-export: ## Export DB to backup.sql (root password will be requested)
	podman exec -i $(DB) mysqldump -u $(DB_USER) -p $(DB_NAME) > backup.sql
	@echo "Exported to backup.sql"

db-import: ## Import DB from backup.sql (root password will be requested)
	@if [ ! -f backup.sql ]; then \
		echo "backup.sql not found in current folder"; exit 1; \
	fi
	cat backup.sql | podman exec -i $(DB) mysql -u $(DB_USER) -p $(DB_NAME)
	@echo "Imported from backup.sql"

port: ## Show exposed web ports
	podman port $(WEB)

prune: ## Cleanup unused containers/images (safe; volumes not removed)
	podman system prune -f



