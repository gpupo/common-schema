#!/bin/bash
rm -fv var/db.sqlite;
rm -fv config/yaml/*;
./bin/common-schema;
mkdir -p var/doctrine;
rm -rfv var/doctrine/*;

./vendor/bin/doctrine orm:generate-entities var/doctrine \
 --num-spaces=4 \
 --generate-annotations=true --regenerate-entities=true \
 --generate-methods=true \
 --extend='Gpupo\CommonSchema\AbstractORMEntity';
./vendor/bin/doctrine orm:generate-repositories var/doctrine/;

rsync -av --delete var/doctrine/Gpupo/CommonSchema/ORM/ src/ORM/;

#php-cs-fixer fix;
./vendor/bin/doctrine orm:schema-tool:update --force
