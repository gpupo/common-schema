#!/bin/bash
cd "$(dirname "$0")/..";
date;
NAMESPACE="${1:-App}";
rsync -aq src/ORM/ build/
find build/ -type f -print0 | xargs -0 sed -i 's~Gpupo\\CommonSchema\\ORM~Gpupo\\CommonSchema\\Build~g'
find build/ -type f -print0 | xargs -0 sed -i "s~repositoryClass=\"Gpupo\\CommonSchema\\Build~repositoryClass=\"${NAMESPACE}\\Entity~g"
find build/ -type f -print0 | xargs -0 sed -i "s~targetEntity=\"Gpupo\\CommonSchema\\Build~targetEntity=\"${NAMESPACE}\\Entity~g"
find build/ -type f -print0 | xargs -0 sed -i "s~(\\Gpupo\\CommonSchema\\Build~(\\${NAMESPACE}~g"
find build/ -type f -print0 | xargs -0 sed -i "s~@param \\Gpupo\\CommonSchema\\Build~@param \\${NAMESPACE}~g"
