.SILENT:
.PHONY: help

## Colors
COLOR_RESET   = \033[0m
COLOR_INFO    = \033[32m
COLOR_COMMENT = \033[33m

## List Targets and Descriptions
help:
	printf "${COLOR_COMMENT}Usage:${COLOR_RESET}\n"
	printf " make [target]\n\n"
	printf "${COLOR_COMMENT}Available targets:${COLOR_RESET}\n"
	awk '/^[a-zA-Z\-\_0-9\.@]+:/ { \
		helpMessage = match(lastLine, /^## (.*)/); \
		if (helpMessage) { \
			helpCommand = substr($$1, 0, index($$1, ":")); \
			helpMessage = substr(lastLine, RSTART + 3, RLENGTH); \
			printf " ${COLOR_INFO}%-16s${COLOR_RESET} %s\n", helpCommand, helpMessage; \
		} \
	} \
	{ lastLine = $$0 }' $(MAKEFILE_LIST)

## Setup environment & Install & Build application
setup:
	mkdir -p Resources/statistics

## Composer Install
install:
	composer install

## Composer Update
update:
	clean
	composer clearcache
	composer update --no-scripts -n
	composer info > Resources/statistics/composer-packages.txt

## Release package
release:
	RMT release --type=patch --comment="Release new version from Makefile" --auto-publish=y --no-ansi --no-interaction

## Quality Assurance tools
qa: loc

## Measure project size using PHPLOC and print human readable output. Intended for usage on the command line.
loc:
	printf "${COLOR_COMMENT}Running PHP Lines of code statistics on library folder${COLOR_RESET}\n"
	phploc --count-tests src/ tests/ | tee Resources/statistics/lines-of-codes.txt

## Apply Php CS fixer and PHPCBF fix rules
cs:
	php-cs-fixer fix --verbose
	phpcbf

## Run PHP Mess Detector on the test code
phpmd:
	phpmd src text codesize,unusedcode,naming,design --exclude vendor,tests,Resources

## Run xUnit tests
phpunit:
	vendor/bin/phpunit --coverage-text

## Clean temporary files
clean:
	printf "${COLOR_COMMENT}Remove temporary an lock files${COLOR_RESET}\n"
	rm -rf vendor/* var/* composer.lock
