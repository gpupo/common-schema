#!/bin/bash
#rm -fv var/db.sqlite > /dev/null;
rm -fv config/yaml/* > /dev/null;
./bin/common-schema;
mkdir -p var/doctrine;
rm -rfv var/doctrine/* > /dev/null;
rm -rf src/ORM/*;

printf "\n\n\n ========= Build YAML files =========\n\n";

./vendor/bin/doctrine orm:generate-entities var/doctrine \
 --num-spaces=4 \
 --generate-annotations=true --regenerate-entities=false \
 --generate-methods=true \
 --no-backup \
 --extend='Gpupo\CommonSchema\AbstractORMEntity';

rsync -av var/doctrine/Gpupo/CommonSchema/ORM/ src/ORM/;

printf "\n\n\n ========= Build ORM objects =========\n\n";

./vendor/bin/doctrine orm:generate-repositories var/doctrine/;

rsync -av var/doctrine/Gpupo/CommonSchema/ORM/ src/ORM/;

./vendor/bin/doctrine orm:validate-schema

rm -f .php_cs.cache
docker-compose run php-dev /root/.composer/vendor/bin/php-cs-fixer fix;

#printf "\n\n\n ========= Update Database =========\n\n";
#./vendor/bin/doctrine orm:schema-tool:update --force
