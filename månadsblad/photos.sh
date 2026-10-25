#!/bin/sh

mkdir -p pics
cd pics
rclone copy --drive-root-folder-id '0B4G06bvvEaDdd1lpaEI4N2ZYN0E' --max-age '2y' drive: .
mogrify -resize 512x512 **/*.JPG
cd ..
# make links
mkdir -p pics2
find pics/ -type f -iname '*.JPG' -print0 | parallel -0 "ln -f -s $(pwd)/{} $(pwd)/pics2/{#}.JPG"