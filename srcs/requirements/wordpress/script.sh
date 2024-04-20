#!/bin/bash
cd /var/www/html
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar

# 워드프레스 다운로드
./wp-cli.phar core download --allow-root

# wp-config.php 파일 생성
./wp-cli.phar config create --dbname=wordpress --dbuser=wpuser --dbpass=password --dbhost=mariadb --allow-root

# 워드프레스 설치
./wp-cli.phar core install --url=localhost --title=inception --admin_user=siteowner --admin_password=strongpassword --admin_email=admin@admin.com --allow-root

# 두 번째 사용자 추가 (예: 일반 사용자)
./wp-cli.phar user create user2 user2@example.com --role=subscriber --user_pass=anotherstrongpassword --allow-root

# PHP-FPM 실행
php-fpm7.4 -F
