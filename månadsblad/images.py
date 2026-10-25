#!/usr/bin/python3

# prints a json-file with all the images in the pics folder

import os
import glob
import json

os.chdir(os.path.dirname(os.path.realpath(__file__)))
print(json.dumps(sorted(glob.glob("pics2/**/*.*", recursive=True), key=os.path.getmtime)[::-1],
                 indent=4, ensure_ascii=False))
