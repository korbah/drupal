#!/bin/bash
#env -i
#set -eux

#chown -R www-data:www-data /opt/drupal/web/sites /opt/drupal/web/modules /opt/drupal/web/themes
#rm -Rf /var/www/html && ln -sf /opt/drupal/web /var/www/html

cp -R /opt/drupal/* /var/www/html/
chown -R www-data:www-data /var/www/html/

# stream edit basic settings
sed -i "s|DocumentRoot /var/www/html|DocumentRoot /var/www/html/web|" "/etc/apache2/sites-available/000-default.conf"
sed -i "s|'host' => 'mysql'|'host' => 'drupal-mysql-service'|" "/etc/apache2/sites-available/000-default.conf"

cd /var/www/html && composer require drush/drush && vendor/drush/drush/drush cr -y

apache2-foreground
#service apache2 start
#tail -f /dev/null
#exec "$@"

