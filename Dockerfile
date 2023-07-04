# LOCAL DEV Environment

FROM korbah/drupal-base-apache-php8:latest


#main entry point for the container that will be executed every time the container starts
COPY docker/docker-entrypoint.sh /root/docker-entrypoint.sh
RUN mkdir /opt/drupal
COPY . /opt/drupal
RUN chmod 755 /root/docker-entrypoint.sh
#RUN curl -OL https://github.com/drush-ops/drush-launcher/releases/latest/download/drush.phar \
#  && chmod a+x drush.phar \
#  && mv drush.phar /usr/local/bin/drush
#RUN cp -R /opt/drupal/* /var/www/html/
#RUN chown -R www-data:www-data /var/www/html/


CMD [ "apache2-foreground" ] 
ENTRYPOINT [ "/bin/bash /root/docker-entrypoint.sh" ]

#ENTRYPOINT [ "apache2-foreground" ]