#!/bin/sh

# Create the Laravel scheduler log file
touch /var/www/storage/logs/scheduler.log

# Add the Laravel scheduler to the root user's crontab
echo "*  *  *  *  *  php /var/www/artisan schedule:run >> /dev/null 2>&1" >> /etc/crontabs/root

