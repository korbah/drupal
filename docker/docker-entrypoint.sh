#!/bin/bash
#env -i
#set -eux

#chown -R www-data:www-data /opt/drupal/web/sites /opt/drupal/web/modules /opt/drupal/web/themes
#rm -Rf /var/www/html && ln -sf /opt/drupal/web /var/www/html

#echo "Moving files to webroot"
#
#cp -R /opt/drupal/* /var/www/html/
#chown -R www-data:www-data /var/www/html/
#
##rm -Rf /var/www/html && ln -sf /opt/drupal/ /var/www/html
#
## stream edit basic settings
#echo "Configuring basic settings"
#sed -i "s|DocumentRoot /var/www/html|DocumentRoot /var/www/html/web|" "/etc/apache2/sites-available/000-default.conf"
#sed -i "s|'host' => 'mysql'|'host' => 'drupal-mysql-service'|" "/etc/apache2/sites-available/000-default.conf"

echo "Clearing up caches"
/var/www/html/vendor/drush/drush/drush cr -y

echo "Starting apache"
apache2-foreground
#service apache2 start
#tail -f /dev/null

#exec "$@"

