#!/bin/bash
# make sure *.php are in /var/www/html
cd /var/www
mv -f *.php ./html/
apache2-foreground
