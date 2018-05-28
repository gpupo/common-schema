#!/bin/bash
#rm -f config/yaml/*;
./bin/common-schema;
mkdir -p var/doctrine;
#rm -rf var/doctrine/*;
./vendor/bin/doctrine orm:generate-entities var/doctrine --generate-annotations=true --regenerate-entities=true --extend='Gpupo\CommonSchema\AbstractORMEntity' --num-spaces=4 --generate-methods=true;
./vendor/bin/doctrine orm:generate-repositories var/doctrine/;
rsync -av --delete var/doctrine/Gpupo/CommonSchema/ORM/ src/ORM/;
#php-cs-fixer fix;
