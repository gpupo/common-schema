#!/bin/bash
cd "$(dirname "$0")/..";
NAMESPACE="${1:-App}";

rsync -aq src/ORM/ build/;
sed bin/sed.txt -e "s/CS_NAMESPACE/$NAMESPACE/g" > var/sed.txt;

build_replace() {
  FILE="${1}";
  sed -i'' --file=var/sed.txt $FILE;
}

export -f build_replace


find build/ -type f -print0 | xargs -0  -I {} bash -c "build_replace {}"
