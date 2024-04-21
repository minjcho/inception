#!/bin/bash

cd /var/www/html
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar

# 워드프레스 다운로드
./wp-cli.phar core download --allow-root

# wp-config.php 파일 생성
./wp-cli.phar config create --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$DB_PASS --dbhost=$DB_HOST --allow-root

# 워드프레스 설치
./wp-cli.phar core install --url=$WP_URL --title=$WP_TITLE --admin_user=$ADMIN_USER --admin_password=$ADMIN_PASSWORD --admin_email=$ADMIN_EMAIL --allow-root

# 두 번째 사용자 추가
./wp-cli.phar user create user2 $USER2_EMAIL --role=$USER2_ROLE --user_pass=$USER2_PASSWORD --allow-root

# PHP-FPM 실행
php-fpm7.4 -F
