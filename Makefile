install:
	composer install
lint:
	composer run-script phpcs -- --standard=PSR12 src bin composer.json
lint-fix:
	composer run-script phpcbf -- --standard=PSR12 src bin composer.json
