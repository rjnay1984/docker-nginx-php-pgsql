FROM nginx:latest
LABEL Name=docker-php-nginx Version=0.0.1
RUN apt-get -y update
COPY default.conf /etc/nginx/conf.d/
EXPOSE 80