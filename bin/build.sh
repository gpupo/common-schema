#!/usr/bin/env bash
cd "$(dirname "$0")/..";
DESTPATH="${1:-var/src}";
NAMESPACE="${2:-App}";
rm -rf build/* var/src/*;
rsync -aq src/ORM/ build/;
sed bin/sed.txt -e "s/CS_NAMESPACE/$NAMESPACE/g" > var/sed.txt;

build_replace() {
  FILE="${1}";
  sed -i'' --file=var/sed.txt $FILE;
}

export -f build_replace

find build/ -type f -print0 | xargs -0  -I {} bash -c "build_replace {}"

rsync -av --ignore-existing --exclude-from './bin/update-exclude.txt' build/ ./$DESTPATH/;
