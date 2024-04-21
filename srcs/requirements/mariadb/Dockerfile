FROM debian:bullseye

RUN apt-get -y update && apt-get -y upgrade && \
    apt-get -y install mariadb-server gettext-base

ARG DB_NAME
ARG DB_USER
ARG DB_PASS

ENV DB_NAME=${DB_NAME}
ENV DB_USER=${DB_USER}
ENV DB_PASS=${DB_PASS}

# 환경 변수 값 로깅
RUN echo "DB_NAME: $DB_NAME"
RUN echo "DB_USER: $DB_USER"
RUN echo "DB_PASS: $DB_PASS"

COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/.

RUN echo "CREATE DATABASE ${DB_NAME};" > /etc/mysql/init.sql \
    && echo "CREATE USER '${DB_USER}'@'%' IDENTIFIED BY '${DB_PASS}';" >> /etc/mysql/init.sql \
    && echo "GRANT ALL PRIVILEGES ON *.* TO '${DB_USER}'@'%' WITH GRANT OPTION;" >> /etc/mysql/init.sql \
    && echo "FLUSH PRIVILEGES;" >> /etc/mysql/init.sql

COPY script.sh .
RUN chmod +x script.sh

RUN mkdir -p /run/mysqld

CMD ["./script.sh"]
