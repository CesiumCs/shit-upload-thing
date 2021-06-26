FROM php:7.4-apache
COPY *.php /var/www/
COPY docker-setup.sh /usr/local/bin/docker-setup
RUN chmod +x /usr/local/bin/docker-setup
RUN chmod a+w /var/www/html
CMD docker-setup
