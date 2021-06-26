#!/bin/bash
if ! [ -f /.dockerenv ]; then
    echo "This script is made to be run automatically inside the container."
    exit
fi
cd /var/www
mv -f *.php ./html/
chmod a+rw /var/www/html
apache2-foreground
