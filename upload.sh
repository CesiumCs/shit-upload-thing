#!/usr/bin/env bash

# if your server doesn't have auth (it should have auth) you can remove
# the `-H "Authorization: ${AUTH}` from the curl flags.
# You can get this auth variable from the headers sent by your browser
# when you log in normally. 
# If you don't want to keep the auth in the file, you can remove this line
# and specify the $AUTH variable in your environment.
AUTH="Basic xxxxxxxxxxxxxxxxxxxxxxxxxxxx"
FILE=${1}
URL="https://cesium.one/i/" # should have trailing slash

if [ -z ${1} ]
then echo "plz specify a file to upload"; exit
fi

# if you don't want it to copy the link to the clipboard automagically
# you can remove `| tee >(xclip -selection clipboard)`
curl -# ${URL}upload.php -H "Authorization: ${AUTH}" -F image=@${FILE} | tee >(xclip -selection clipboard) && echo ""
