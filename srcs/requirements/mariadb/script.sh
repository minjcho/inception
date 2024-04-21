#!/bin/bash

# rm -rf /etc/mysql/init.sql

# echo "CREATE DATABASE \${DB_NAME};" > /etc/mysql/init.sql \
#     && echo "CREATE USER '\${DB_USER}'@'%' IDENTIFIED BY '\${DB_PASS}';" >> /etc/mysql/init.sql \
#     && echo "GRANT ALL PRIVILEGES ON *.* TO '\${DB_USER}'@'%' WITH GRANT OPTION;" >> /etc/mysql/init.sql \
#     && echo "FLUSH PRIVILEGES;" >> /etc/mysql/init.sql

mysql_install_db
mysqld
