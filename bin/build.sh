#!/bin/bash
mkdir -p var/doctrine;
rm -rf var/doctrine/*  src/ORM/Entity/* Resources/metadata/* > /dev/null;
./bin/common-schema;

./vendor/bin/doctrine orm:generate-entities var/doctrine \
 --num-spaces=4 \
 --generate-annotations=true --regenerate-entities=false \
 --generate-methods=true \
 --no-backup \
 --extend='Gpupo\CommonSchema\AbstractORMEntity';

rsync -aq var/doctrine/Gpupo/CommonSchema/ORM/Entity/ src/ORM/Entity/;

./vendor/bin/doctrine orm:generate-repositories var/doctrine/;

rsync --ignore-existing -rq var/doctrine/Gpupo/CommonSchema/ORM/Repository/ src/ORM/Repository/;

find src/ORM/Entity/ -type f -print0 | xargs -0 sed -i 's/private/protected/g'
find src/ORM/Repository/ -type f -print0 | xargs -0 sed -i 's~Doctrine\\ORM\\EntityRepository~Gpupo\\CommonSchema\\AbstractORMRepository~g'

./vendor/bin/doctrine orm:validate-schema --skip-sync


COMPOSE_HTTP_TIMEOUT=2 docker-compose run php-dev /root/.composer/vendor/bin/php-cs-fixer fix -q --using-cache=false;

printf "DONE!\n";

# ./vendor/bin/doctrine orm:schema-tool:update --force
