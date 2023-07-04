# LOCAL DEV Environment

FROM korbah/drupal-base-apache-php8:latest


#main entry point for the container that will be executed every time the container starts
COPY docker/docker-entrypoint.sh /root/docker-entrypoint.sh
RUN mkdir /opt/drupal
COPY . /opt/drupal
RUN chmod 755 /root/docker-entrypoint.sh

#RUN cp -R /opt/drupal/* /var/www/html/
#RUN chown -R www-data:www-data /var/www/html/
RUN sed -i "s|DocumentRoot /var/www/html|DocumentRoot /var/www/html/web|" "/etc/apache2/sites-available/000-default.conf"

ENTRYPOINT [ "apache2-foreground" ]


