#!/bin/bash
# Generate Schema Documents, with pipe2 (see https://github.com/gpupo/pipe2)
##

pipe2 generate --format=Google --pretty=true > ./sphinx-google.xml
pipe2 generate --format=Google --slug=true --pretty=true > ./sphinx-google-with-slug.xml

pipe2 generate --format=GoogleExtended --pretty=true > ./sphinx-google-extended.xml
pipe2 generate --format=GoogleExtended --slug=true --pretty=true > ./sphinx-google-extended-with-slug.xml
