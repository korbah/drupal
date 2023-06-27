# LOCAL DEV Environment

FROM dock1a/drupal-local-dev-drupal:0.0.1


#main entry point for the container that will be executed every time the container starts
COPY docker-entrypoint.sh /root/docker-entrypoint.sh
RUN chmod 755 /root/docker-entrypoint.sh

ENTRYPOINT [ "apache2-foreground" ]

