#!/bin/bash
mkdir -p var/doctrine;
rm -rf var/doctrine/* src/ORM/Entity/*/* Resources/metadata/* > /dev/null;
./bin/common-schema metadata:build;

./vendor/bin/doctrine orm:generate-entities var/doctrine \
 --num-spaces=4 \
 --generate-annotations=true --regenerate-entities=false \
 --generate-methods=true \
 --no-backup \
 --extend='Gpupo\CommonSchema\ORM\Entity\AbstractEntity';

rsync -aq var/doctrine/Gpupo/CommonSchema/ORM/Entity/ src/ORM/Entity/;

./vendor/bin/doctrine orm:generate-repositories var/doctrine/;

rsync --ignore-existing -rq var/doctrine/Gpupo/CommonSchema/ORM/EntityRepository/ src/ORM/EntityRepository/;

find src/ORM/Entity/ -type f -print0 | xargs -0 sed -i 's/private/protected/g'
find src/ORM/EntityRepository/*/ -type f -print0 | xargs -0 sed -i 's~Doctrine\\ORM\\EntityRepository~Gpupo\\CommonSchema\\ORM\\EntityRepository\\AbstractEntityRepository~g'

./vendor/bin/doctrine orm:validate-schema --skip-sync


#COMPOSE_HTTP_TIMEOUT=2
php-cs-fixer fix -q --using-cache=false;

printf "DONE!\n";

# ./vendor/bin/doctrine orm:schema-tool:update --force
