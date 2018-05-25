./vendor/bin/doctrine orm:generate-entities var/ --generate-annotations=true --regenerate-entities=true --extend='Gpupo\CommonSchema\AbstractORMEntity' --num-spaces=4 --generate-methods=true;
rsync -av --delete var/Gpupo/CommonSchema/ORM/ src/ORM/;
