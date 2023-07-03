# LOCAL DEV Environment

FROM korbah/drupal-base-apache-php8:latest


#main entry point for the container that will be executed every time the container starts
COPY docker/docker-entrypoint.sh /root/docker-entrypoint.sh
#COPY web /var/www/html
RUN chmod 755 /root/docker-entrypoint.sh

ENTRYPOINT [ "/bin/bash/", "/root/docker-entrypoint.sh" ]

