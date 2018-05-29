#!/bin/bash
rm -fv var/db.sqlite;
rm -fv config/yaml/*;
./bin/common-schema;
mkdir -p var/doctrine;
rm -rfv var/doctrine/*;

printf "\n\n\n ========= Build YAML files =========\n\n";

./vendor/bin/doctrine orm:generate-entities var/doctrine \
 --num-spaces=4 \
 --generate-annotations=true --regenerate-entities=true \
 --generate-methods=true \
 --extend='Gpupo\CommonSchema\AbstractORMEntity';

printf "\n\n\n ========= Build ORM objects =========\n\n";

./vendor/bin/doctrine orm:generate-repositories var/doctrine/;

rsync -av --delete var/doctrine/Gpupo/CommonSchema/ORM/ src/ORM/;

php-cs-fixer fix;

printf "\n\n\n ========= Update Database =========\n\n";
./vendor/bin/doctrine orm:schema-tool:update --force
