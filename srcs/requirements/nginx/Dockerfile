FROM debian:bullseye

RUN apt -y update && apt -y upgrade
RUN apt -y install nginx openssl

ARG SSL_COUNTRY
ARG SSL_STATE
ARG SSL_ORGANIZATION
ARG SSL_ORGANIZATIONAL_UNIT
ARG SSL_COMMON_NAME

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -keyout /etc/ssl/private/server_pkey.pem \
    -out /etc/ssl/certs/server.crt \
    -subj "/C=${SSL_COUNTRY}/ST=${SSL_STATE}/O=${SSL_ORGANIZATION}/OU=${SSL_ORGANIZATIONAL_UNIT}/CN=${SSL_COMMON_NAME}"

COPY ./tools/default /etc/nginx/sites-available/.

CMD ["nginx", "-g", "daemon off;"]
