FROM debian:bullseye

RUN apt -y update && apt -y upgrade

RUN apt install -y php7.4-fpm \
	php-mysql \
	php-mysqli \
	curl

RUN mkdir -p /run/php

RUN chown -R www-data:www-data /run/php

COPY ./tools/www.conf /etc/php/7.4/fpm/pool.d/.

COPY script.sh .
RUN chmod +x script.sh

CMD ["./script.sh"]