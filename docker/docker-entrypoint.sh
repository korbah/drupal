#!/bin/bash
env -i
#set -eux

if [ "${ENVIRONMENT}" = "dev" ]; then
    echo "-------------------- START DEV EP Script --------------------"
    echo "--- 1:3 Setting up dev environment"
    cp -r /root/auth/.ssh /root/ && chown -R root:root /root/.ssh
    ssh-keyscan git.yellowpencil.com > /root/.ssh/known_hosts
    chmod 400 -R /root/.ssh
    echo "$SSH_AUTH_SOCK"
    eval `ssh-agent -s`
    keys="$(ls -A ~/.ssh/ -I *.pub -I config -I authorized_keys -I known_hosts)"
    if [[ "${keys}" = "" ]]; then 
        echo "${Er}-- No suitable keys found, private repositories won't install properly${c}"
    else
        ssh-add /root/.ssh/$keys
        # Set git
        git config --global --add safe.directory "*"
    fi


    echo "--- Setting up user ${LOCAL_USER_NAME} -u ${LOCAL_USER_ID} -g ${LOCAL_GROUP_ID} ${clear}"
    groupadd -g ${LOCAL_GROUP_ID} ${LOCAL_USER_NAME} 
    useradd ${LOCAL_USER_NAME} -u ${LOCAL_USER_ID} -g ${LOCAL_GROUP_ID} -p ${LOCAL_USER_NAME}envctl
    echo "--- Changing permissions${c}"
    #chown -Rf ${LOCAL_USER_ID}:${LOCAL_GROUP_ID} ${WorkDir}
    usermod -a -G www-data ${LOCAL_USER_NAME}
    usermod -a -G sudo ${LOCAL_USER_NAME}

    echo "--- 2:3 Configuring Drupal"
    if [ ! -d "/opt/drupal/web/sites" ]; then
        echo "--- Installing Drupal First time"
        DrupalFolder="/opt/drupal"
        export COMPOSER_HOME="$(mktemp -d)"
        mkdir /tmp/drupal
        composer create-project --no-interaction "drupal/recommended-project:$DRUPAL_VERSION" /tmp/drupal
        cp -r /tmp/drupal/* /opt/drupal/
        chown -R www-data:${LOCAL_GROUP_ID} /opt/drupal/web/sites /opt/drupal/web/modules /opt/drupal/web/themes
        rm -Rf /var/www/html && ln -sf /opt/drupal/web /var/www/html
        rm -rf "$COMPOSER_HOME"
        rm -rf /tmp/drupal

    else
        echo "--- Drupal ${DRUPAL_VERSION} - ${INSTALLED_VERSION} already installed "
        echo "--- Normalizing permissions"
        chown -R www-data:${LOCAL_GROUP_ID} /opt/drupal/web/sites /opt/drupal/web/modules /opt/drupal/web/themes
        rm -Rf /var/www/html && ln -sf /opt/drupal/web /var/www/html
    fi

    echo "--- 3:3 Configuring dependencies"


    # composer commands
    #echo "${B}-- Building Composer Dependencies${c}"
    #cd $WorkDir 
    #chmod u+w web/sites/default
    #composer config --global process-timeout 900
    #composer install -o -vv --prefer-dist

    # Drush Cmds
    #echo "Drush cmds"
    #drush cr -y

    # NPM Build Dev
    #echo "Npm build-dev job"
    #cd ${WorkDir}/${DRUPAL_THEME}
    #
    #npm install

    # run npm build-dev
    #npm run build-dev 

    #service apache2 start

    #tail -f /var/log/apache2/*.log

    # how to run apache in the background and tail the logs  
    # Run CMDs from DOCKERFILE npm run build-dev <<
    #service apache2 start
    apache2-foreground
    #cd /opt/drupal/web/themes/custom/yp_theme
    #exec "$@"
    echo "-------------------- END DEV EP Script --------------------"

elif [ "${ENVIRONMENT}" = "new" ]; then 

    echo "--- Installing Drupal First time"
    DrupalFolder="/opt/drupal"
    export COMPOSER_HOME="$(mktemp -d)"
    mkdir /tmp/drupal 
    composer create-project --no-interaction "drupal/recommended-project:$DRUPAL_VERSION" /tmp/drupal
    cp -r /tmp/drupal/* /opt/drupal/
    chown -R www-data:${LOCAL_GROUP_ID} /opt/drupal/web/sites /opt/drupal/web/modules /opt/drupal/web/themes
    rm -Rf /var/www/html && ln -sf /opt/drupal/web /var/www/html
    rm -rf "$COMPOSER_HOME"
    rm -rf /tmp/drupal

    apache2-foreground
    #service apache2 start
    #exec "$@"

elif [ "${ENVIRONMENT}" = "staging" ]; then
    #chown -R www-data:www-data /opt/drupal/web/sites /opt/drupal/web/modules /opt/drupal/web/themes
    #rm -Rf /var/www/html && ln -sf /opt/drupal/web /var/www/html


    # Set the path to your Apache virtual host file
    virtual_host_file="/etc/apache2/sites-available/000-default.conf"
    # Set the new webroot path
    new_webroot="/var/www/html/web"
    # Use sed to replace the webroot path in the virtual host file
    echo "Setting up webroot to $new_webroot"

    sed -i "s|DocumentRoot /var/www/old_webroot|DocumentRoot $new_webroot|" "$virtual_host_file"
    chown -R www-data:www-data ${new_webroot}/sites ${new_webroot}/modules ${new_webroot}/themes
    
    apache2-foreground
    #service apache2 start
    #exec "$@"
elif [ "${ENVIRONMENT}" = "production" ]; then 
    apache2-foreground
    
    #exec "$@"
fi
