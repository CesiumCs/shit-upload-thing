#!/bin/bash
# make sure *.php are in /var/www/html
cd /var/www
mv -f *.php ./html/
chmod a+rw /var/www/html
apache2-foreground
