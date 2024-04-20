FROM debian:bullseye

RUN apt -y update && apt -y upgrade

RUN apt -y install nginx && apt -y install openssl

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -keyout /etc/ssl/private/server_pkey.pem \
    -out /etc/ssl/certs/server.crt \
    -subj "/C=KO/L=KH/O=1337/OU=student/CN=minjcho.42.fr"

COPY ./tools/default /etc/nginx/sites-available/.

CMD ["nginx", "-g", "daemon off;"]