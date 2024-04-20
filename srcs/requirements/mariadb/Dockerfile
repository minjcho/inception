FROM debian:bullseye

RUN apt -y update && apt -y upgrade

RUN apt -y install mariadb-server

COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/.
COPY ./tools/init.sql /etc/mysql/init.sql

COPY script.sh .

RUN chmod +x script.sh

RUN mkdir -p /run/mysqld

CMD ["./script.sh"]