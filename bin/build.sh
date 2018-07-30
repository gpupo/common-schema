#!/bin/bash

rsync -aq var/doctrine/Gpupo/CommonSchema/ORM/ build/
find build/ -type f -print0 | xargs -0 sed -i 's~Gpupo\\CommonSchema\\ORM\\~Gpupo\\CommonSchema\\Build\\~g'
find build/ -type f -print0 | xargs -0 sed -i 's~repositoryClass="Gpupo\\CommonSchema\\Build\\~repositoryClass="App\\Entity\\~g'
find build/ -type f -print0 | xargs -0 sed -i 's~targetEntity="Gpupo\\CommonSchema\\Build\\~targetEntity="App\\Entity\\~g'
find build/ -type f -print0 | xargs -0 sed -i 's~(\\Gpupo\\CommonSchema\\Build\\~(\\App\\~g'
find build/ -type f -print0 | xargs -0 sed -i 's~@param \\Gpupo\\CommonSchema\\Build\\~@param \\App\\~g'
